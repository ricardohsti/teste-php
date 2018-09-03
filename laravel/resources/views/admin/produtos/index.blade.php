@component('admin.layouts.elements.body')
    @slot('title') Lista @endslot
    @slot('description') Produtos @endslot

    <div class="table-responsive">
        <div class="btn-toolbar mb-2 mb-md-2">
            <div class="btn-group mr-2">
                <a href="/produtos/create" class="btn btn-md btn-primary">Novo</a>
            </div>
        </div>
        
        <small class="mt-3 font-weight-bold">
            <span class="badge badge-warning mr-1" style="background-color: #fffacc; border: solid 1px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            Produtos com baixo estoque
        </small>

        @isset($created)
            <span>Criado com sucesso</span>
        @endisset
        <table class="table table-striped table-sm">
            <thead class="thead-dark">
                <th>#</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th class="text-center">Ação</th>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                <tr class="{{ ($produto->quantidade <= 3 ) ? 'table-warning' : '' }}">
                    <td>{{ $produto->id }}</td>
                    <td>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#detalheProduto" data-info="{{ $produto->toJson() }}">
                            {{ $produto->nome }}
                        </a>
                    </td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>@currency($produto->preco)</td>
                    <td class="text-center">
                        <a href="{{ route('produtos.edit', $produto->id)}}" class="btn btn-sm btn-secondary"  title="Editar">
                            <span data-feather="edit"></span>
                        </a>
                        <form method="POST" action="{{ route('produtos.destroy', $produto->id)}}" style="display: inline-block;" onsubmit="return false;">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger" type="submit" onclick="confirmacaoExclusao(this.form)" title="Excluir">
                                <span data-feather="trash-2"></span>
                            </button>
                        </form>
                        <div class="btn-group mr-2">
                            <a class="btn btn-sm btn-dark" href="{{ route('produtos.altera-quantidade', ['id' => $produto->id, 'quantidade' => ($produto->quantidade + 1)]) }}">
                                <span data-feather="plus-circle"></span>
                            </a>
                            <span class="btn btn-sm btn-dark" style="cursor: default;">Estoque</span>
                            @if($produto->quantidade - 1 < 0)
                            <button class="btn btn-sm btn-dark" href="javascript: void(0)" disabled="disabled">
                                <span data-feather="minus-circle"></span>
                            </button>
                            @else
                            <a class="btn btn-sm btn-dark" href="{{ route('produtos.altera-quantidade', ['id' => $produto->id, 'quantidade' => ($produto->quantidade - 1)]) }}">
                                <span data-feather="minus-circle"></span>
                            </a>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $produtos->links() }}

        @include('admin.produtos.detalhe')
        
        <script type="text/javascript">
            function confirmacaoExclusao(form) {
                if (confirm('Deseja realmente excluir o registro?')) {
                    form.submit();
                }
            }
        </script>
    </div>
@endcomponent