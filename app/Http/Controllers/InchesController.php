<?php

namespace App\Http\Controllers;

use App\Models\InchesModel;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class InchesController extends Controller
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

        $inches = InchesModel::query()
            ->when(request()->search, fn($q) => $q->where('nome', 'LIKE' , "%".request()->search."%"))
            ->when(request()->sort, fn($q) => $q->orderBy(request()->sort, request()->sortDir))
            ->paginate(15);
        return Inertia::render('inches/List', [
            'inches' => $inches,
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
        return Inertia::render('inches/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules = [
            'nome' => 'required|string|max:255',
            'status' => 'required|in:0,1',
        ];

        $messages = [
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

        $nome = $request->input('nome');
        $status = $request->input('status');

        $inche = new InchesModel();
        $inche->nome = $nome;
        $inche->status = $status;
        $retorno = $inche->save();

        if($retorno){
            return redirect()->route('inches.create')->with('success', 'Operação realizada com sucesso!');
        }

        return redirect()->route('inches.create')->with('error', 'Falha ao realizar a operação!');
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
        $inche = InchesModel::find($id);
        return Inertia::render('inches/Edit', compact('inche'));
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

        $inche = InchesModel::find($id);
        $inche->nome = $nome;
        $inche->status = $status;
        $retorno = $inche->save();

        if($retorno){
            return redirect()->route('inches.index')->with('success', 'Operação realizada com sucesso!');
        }

        return redirect()->route('inches.index')->with('error', 'Falha ao realizar a operação!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inche = InchesModel::find($id);
        $retorno = $inche->delete();
        if($retorno){
            return redirect()->route('inches.index')->with('success', 'Operação realizada com sucesso!');
        }
        return redirect()->route('inches.index')->with('error', 'Falha ao realizar a operação!');
    }
}
