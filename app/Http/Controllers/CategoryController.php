<?php

namespace App\Http\Controllers;

use App\Models\EnvironmentModel;
use App\Models\CategoriasModel;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        request()->validate([
            'sortDir' => ['nullable', 'in:asc,desc'],
            'sort' => ['nullable', 'in:id,nome,data_cadastro,data_update,status,ambiente_id'],
        ]);

        $categorias = CategoriasModel::with('ambiente')
            ->when(request()->search, fn($q) => $q->where('nome', 'LIKE' , "%".request()->search."%"))
            ->when(request()->sort, fn($q) => $q->orderBy(request()->sort, request()->sortDir))
            ->paginate(15);
        return Inertia::render('category/List', [
            'categorias' => $categorias,
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
        $ambientes = EnvironmentModel::get();
        return Inertia::render('category/Create', compact('ambientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules = [
            'nome' => 'required|string|max:255',
            'status' => 'required|in:0,1',
            'ambiente_id' => 'required|exists:ambientes,id',
        ];

        $messages = [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome não pode ter mais de 255 caracteres.',
            'status.required' => 'O campo status é obrigatório.',
            'status.in' => 'O campo status deve ser "ativo" ou "inativo".',
            'ambiente_id.required' => 'O campo ambiente é obrigatório.',
            'ambiente_id.exists' => 'O ambiente selecionado é inválido.',
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
        $ambiente_id = $request->input('ambiente_id');

        $categoria = new CategoriasModel();
        $categoria->nome = $nome;
        $categoria->status = $status;
        $categoria->ambiente_id = $ambiente_id;
        $retorno = $categoria->save();

        if($retorno){
            return redirect()->route('category.create')->with('success', 'Operação realizada com sucesso!');
        }

        return redirect()->route('category.create')->with('error', 'Falha ao realizar a operação!');
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
        $categoria = CategoriasModel::find($id);
        $ambientes = EnvironmentModel::get();
        return Inertia::render('category/Edit', compact('categoria','ambientes'));
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
            'ambiente_id' => 'required|exists:ambientes,id',
        ];

        $messages = [
            'id.required' => 'O campo id é obrigatório.',
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome não pode ter mais de 255 caracteres.',
            'status.required' => 'O campo status é obrigatório.',
            'status.in' => 'O campo status deve ser "ativo" ou "inativo".',
            'ambiente_id.required' => 'O campo ambiente é obrigatório.',
            'ambiente_id.exists' => 'O ambiente selecionado é inválido.',
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
        $ambiente_id = $request->input('ambiente_id');

        $categoria = CategoriasModel::find($id);
        $categoria->nome = $nome;
        $categoria->status = $status;
        $categoria->ambiente_id = $ambiente_id;
        $retorno = $categoria->save();

        if($retorno){
            return redirect()->route('category.index')->with('success', 'Operação realizada com sucesso!');
        }

        return redirect()->route('category.index')->with('error', 'Falha ao realizar a operação!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = CategoriasModel::find($id);
        $retorno = $categoria->delete();
        if($retorno){
            return redirect()->route('category.index')->with('success', 'Operação realizada com sucesso!');
        }
        return redirect()->route('category.index')->with('error', 'Falha ao realizar a operação!');
    }
}
