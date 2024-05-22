<?php

namespace App\Http\Controllers;

use App\Models\CompanyModel;
use App\Models\FotosEmpresaModel;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        request()->validate([
            'sortDir' => ['nullable', 'in:asc,desc'],
            'sort' => ['nullable', 'in:id,nome,data_cadastro,data_update,status'],
        ]);

        $empresas = CompanyModel::query()
            ->when(request()->search, fn($q) => $q->where('nome', 'LIKE' , "%".request()->search."%"))
            ->when(request()->sort, fn($q) => $q->orderBy(request()->sort, request()->sortDir))
            ->paginate(15);
        return Inertia::render('company/List', [
            'empresas' => $empresas,
            'search' => request()->search,
            'sort' => request()->sort ?? 'id',
            'sortDir' => request()->sortDir ?? 'asc'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('company/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules = [
            'nome' => 'required|string|max:255',
            'status' => 'required|in:0,1',
            'razao_social' => 'required|string|max:255',
            'slogan' => 'required',
            'area_construida' => 'required',
            'data_fundacao' => 'required',
            'quantidade_funcionarios' => 'required',
            'fotos.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ];

        $messages = [
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome não pode ter mais de 255 caracteres.',
            'status.in' => 'O campo status deve ser "ativo" ou "inativo".',
            'required' => 'O campo :attribute é obrigatório.',
        ];
//
//        $validator = Validator::make($request->all(), $rules, $messages);

        // Definir as regras de validação
        $validator = Validator::make($request->all(), $rules, $messages);

        // Verificar se a validação falhou
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $logo = "";
        if($request->file('logo')){
            $logo = $request->file('logo')->store('company','public');
        }

        $empresa = new CompanyModel();
        $empresa->nome = $request->input('nome');
        $empresa->razao_social = $request->input('razao_social');
        $empresa->logo = $logo;
        $empresa->slogan = $request->input('slogan');
        $empresa->area_construida = $request->input('area_construida');
        $empresa->data_fundacao = $request->input('data_fundacao');
        $empresa->quantidade_funcionarios = $request->input('quantidade_funcionarios');
        $empresa->video_institucional = $request->input('video_institucional');
        $empresa->status = $request->input('status');
        $retorno = $empresa->save();

        if ($request->hasFile('fotos') && $retorno) {
            foreach ($request->file('fotos') as $file) {
                $photoPath = $file->store('fotosempresa', 'public');
                $photo = new FotosEmpresaModel();
                $photo->empresa_id = $empresa->id;
                $photo->foto = $photoPath;
                $photo->status = 1;
                $photo->save();
            }
        }



        if($retorno){
            return redirect()->route('company.create')->with('success', 'Operação realizada com sucesso!');
        }

        return redirect()->route('company.create')->with('error', 'Falha ao realizar a operação!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $empresa = CompanyModel::find($id);
        return Inertia::render('company/Edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'id' => 'required',
            'nome' => 'required|string|max:255',
            'status' => 'required|in:0,1',
        ];

        $messages = [
            'id.required' => 'O campo id é obrigatório.',
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome não pode ter mais de 255 caracteres.',
            'status.required' => 'O campo status é obrigatório.',
            'status.in' => 'O campo status deve ser "ativo" ou "inativo".',
        ];
//
//        $validator = Validator::make($request->all(), $rules, $messages);

        // Definir as regras de validação
        $validator = Validator::make($request->all(), $rules, $messages);

        // Verificar se a validação falhou
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $id = $request->input('id');
        $nome = $request->input('nome');
        $status = $request->input('status');

        $empresa = CompanyModel::find($id);
        $empresa->nome = $nome;
        $empresa->status = $status;
        $retorno = $empresa->save();

        if($retorno){
            return redirect()->route('company.index')->with('success', 'Operação realizada com sucesso!');
        }

        return redirect()->route('company.index')->with('error', 'Falha ao realizar a operação!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empresa = CompanyModel::find($id);
        $retorno = $empresa->delete();
        if($retorno){
            return redirect()->route('company.index')->with('success', 'Operação realizada com sucesso!');
        }
        return redirect()->route('company.index')->with('error', 'Falha ao realizar a operação!');
    }
}
