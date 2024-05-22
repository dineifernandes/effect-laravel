<?php

namespace App\Http\Controllers;

use App\Models\AttributesModel;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class AttributesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        request()->validate([
            'sortDir' => ['nullable', 'in:asc,desc'],
            'sort' => ['nullable', 'in:id,nome,data_cadastro,data_update,status,vantagem, nota'],
        ]);

        $atributos = AttributesModel::query()
            ->when(request()->search, fn($q) => $q->where('nome', 'LIKE' , "%".request()->search."%"))
            ->when(request()->sort, fn($q) => $q->orderBy(request()->sort, request()->sortDir))
            ->paginate(15);
        return Inertia::render('attributes/List', [
            'atributos' => $atributos,
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
        return Inertia::render('attributes/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules = [
            'nome' => 'required|string|max:255',
            'status' => 'required|in:0,1',
            'vantagem' => 'required',
            'nota' => 'required|numeric|min:0',
        ];

        $messages = [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome não pode ter mais de 255 caracteres.',
            'status.required' => 'O campo status é obrigatório.',
            'status.in' => 'O campo status deve ser "ativo" ou "inativo".',
            'vantagem.required' => 'O campo vantagem é obrigatório.',
            'nota.numeric' => 'O campo nota deve ser um número.',
            'nota.min' => 'O campo nota deve ser um número não negativo.',
        ];
//
//        $validator = Validator::make($request->all(), $rules, $messages);

        // Definir as regras de validação
        $validator = Validator::make($request->all(), $rules, $messages);

        // Verificar se a validação falhou
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $nome = $request->input('nome');
        $status = $request->input('status');
        $vantagem = $request->input('vantagem');
        $nota = $request->input('nota');

        $atributo = new AttributesModel();
        $atributo->nome = $nome;
        $atributo->vantagem = $vantagem;
        $atributo->nota = $nota;
        $atributo->status = $status;
        $retorno = $atributo->save();

        if($retorno){
            return redirect()->route('attributes.create')->with('success', 'Operação realizada com sucesso!');
        }

        return redirect()->route('attributes.create')->with('error', 'Falha ao realizar a operação!');
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
        $atributo = AttributesModel::find($id);
        return Inertia::render('attributes/Edit', compact('atributo'));
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
            'vantagem' => 'required',
            'nota' => 'required|numeric|min:0',
        ];

        $messages = [
            'id.required' => 'O campo id é obrigatório.',
            'nome.required' => 'O campo nome é obrigatório.',
            'vantagem.required' => 'O campo vantagem é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome não pode ter mais de 255 caracteres.',
            'status.required' => 'O campo status é obrigatório.',
            'status.in' => 'O campo status deve ser "ativo" ou "inativo".',
            'nota.numeric' => 'O campo nota deve ser um número.',
            'nota.min' => 'O campo nota deve ser um número não negativo.',
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
        $vantagem = $request->input('vantagem');
        $nota = $request->input('nota');

        $atributo = AttributesModel::find($id);
        $atributo->nome = $nome;
        $atributo->vantagem = $vantagem;
        $atributo->nota = $nota;
        $atributo->status = $status;
        $retorno = $atributo->save();

        if($retorno){
            return redirect()->route('attributes.index')->with('success', 'Operação realizada com sucesso!');
        }

        return redirect()->route('attributes.index')->with('error', 'Falha ao realizar a operação!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $atributo = AttributesModel::find($id);
        $retorno = $atributo->delete();
        if($retorno){
            return redirect()->route('attributes.index')->with('success', 'Operação realizada com sucesso!');
        }
        return redirect()->route('attributes.index')->with('error', 'Falha ao realizar a operação!');
    }
}
