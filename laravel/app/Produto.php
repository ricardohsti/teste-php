<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    /**
     * Escopo para retornar somente prudutos com baixo estoque.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAlertaEstoque($query)
    {
        return $query->where('quantidade', '<=', 3);
    }

    /**
     * Escopo para retornar ultimos produtos com atualização no estoque.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUltimosAtualizados($query)
    {
        return $query->latest('updated_at')->limit(5);
    }
}
