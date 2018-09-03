<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoService
{
	public static function listar()
	{
		return Produto::orderBy('nome')
                      ->orderBy('preco')
                      ->paginate();
	}

	public static function produto($id)
	{
		return Produto::findOrFail($id);
	}

	public static function cadastrar($dados)
	{
        $produto = new Produto();

        $produto->nome = $dados['nome'];
        $produto->descricao = $dados['descricao'];
        $produto->quantidade = $dados['quantidade'];
        $produto->preco = str_replace(',', '.', str_replace('.', '', $dados['preco']));
        
        return $produto->save();
	}

	public static function alterar($id, $dados)
	{
		$produto = Produto::findOrFail($id);

        $produto->nome = $dados['nome'];
        $produto->descricao = $dados['descricao'];
        $produto->quantidade = $dados['quantidade'];
        $produto->preco = str_replace(',', '.', str_replace('.', '', $dados['preco']));
        
        return $produto->save();
	}

	public static function excluir($id)
	{
		$produto = Produto::findOrFail($id);
        
        return $produto->delete();
	}

	public static function alterarEstoque($id, $quantidade)
	{
		$produto = Produto::findOrFail($id);
        
        $produto->quantidade = $quantidade;
        
        return $produto->save();
    }
}