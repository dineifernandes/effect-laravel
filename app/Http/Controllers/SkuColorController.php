<?php

namespace App\Http\Controllers;

use App\Models\SkuColorModel;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class SkuColorController extends Controller
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

        $cores = SkuColorModel::query()
            ->when(request()->search, fn($q) => $q->where('nome', 'LIKE' , "%".request()->search."%"))
            ->when(request()->sort, fn($q) => $q->orderBy(request()->sort, request()->sortDir))
            ->paginate(15);
        return Inertia::render('skucolor/List', [
            'cores' => $cores,
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
        return Inertia::render('skucolor/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules = [
            'nome' => 'required|string|max:255',
            'status' => 'required|in:0,1',
            'cor_aproximada' => 'required',
        ];

        $messages = [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome não pode ter mais de 255 caracteres.',
            'status.required' => 'O campo status é obrigatório.',
            'status.in' => 'O campo status deve ser "ativo" ou "inativo".',
            'cor_aproximada.required' => 'O campo cor aproximada é obrigatório.',
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
        $cor_aproximada = $request->input('cor_aproximada');

        $cor = new SkuColorModel();
        $cor->nome = $nome;
        $cor->status = $status;
        $cor->cor_aproximada = $cor_aproximada;
        $retorno = $cor->save();

        if($retorno){
            return redirect()->route('skucolor.create')->with('success', 'Operação realizada com sucesso!');
        }

        return redirect()->route('skucolor.create')->with('error', 'Falha ao realizar a operação!');
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
        $cor = SkuColorModel::find($id);
        return Inertia::render('skucolor/Edit', compact('cor'));
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
            'cor_aproximada' => 'required'
        ];

        $messages = [
            'id.required' => 'O campo id é obrigatório.',
            'nome.required' => 'O campo nome é obrigatório.',
            'cor_aproximada.required' => 'O campo cor aproximada é obrigatório.',
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
        $cor_aproximada = $request->input('cor_aproximada');

        $cor = SkuColorModel::find($id);
        $cor->nome = $nome;
        $cor->status = $status;
        $cor->cor_aproximada = $cor_aproximada;
        $retorno = $cor->save();

        if($retorno){
            return redirect()->route('skucolor.index')->with('success', 'Operação realizada com sucesso!');
        }

        return redirect()->route('skucolor.index')->with('error', 'Falha ao realizar a operação!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cor = SkuColorModel::find($id);
        $retorno = $cor->delete();
        if($retorno){
            return redirect()->route('skucolor.index')->with('success', 'Operação realizada com sucesso!');
        }
        return redirect()->route('skucolor.index')->with('error', 'Falha ao realizar a operação!');
    }
}
