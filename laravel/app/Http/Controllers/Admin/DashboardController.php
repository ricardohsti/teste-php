<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$produtosBaixoEstoque = Produto::alertaEstoque()->get();
    	$produtosAtualizados = Produto::ultimosAtualizados()->get();

        return View('admin.dashboard.index', [
					'produtosBaixoEstoque' => $produtosBaixoEstoque,
					'ultimosProdutosAtualizados' => $produtosAtualizados
			   ]);
    }
}
