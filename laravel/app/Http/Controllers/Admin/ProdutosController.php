<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoRequest;
use App\Services\ProdutoService;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = ProdutoService::listar();

        return View('admin.produtos.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.produtos.create');
    }    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = ProdutoService::produto($id);

        return View('admin.produtos.edit', ['produto' => $produto]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoRequest $request)
    {
        ProdutoService::cadastrar($request->all());
        
        return response()->redirectToRoute('produtos.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Requests  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdutoRequest $request, $id)
    {
        ProdutoService::alterar($id, $request->all());

        return response()->redirectToRoute('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProdutoService::excluir($id);

        return response()->redirectToRoute('produtos.index');
    }

    /**
     * Atualiza a quantidade em estoque do produto
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function alteraQuantidade($id, $quantidade)
    {
        ProdutoService::alterarEstoque($id, $quantidade);

        return response()->redirectToRoute('produtos.index');
    }
}
