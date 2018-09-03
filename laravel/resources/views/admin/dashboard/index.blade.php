@component('admin.layouts.elements.body')
    @slot('title') Dashboard @endslot
    @slot('description') Produtos @endslot

    <div class="row">
        <div class="col-lg-7">
            <div class="my-3 p-3 rounded shadow-sm">
                <h6>Produtos com baixo estoque</h6>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Quantidade</th>
                        </thead>
                        <tbody>
                            @foreach($produtosBaixoEstoque as $produto)
                            <tr>
                                <td>{{ $produto->id }}</td>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->quantidade }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom border-gray pb-2 mb-0">Últimos produtos atualizados</h6>
                @foreach($ultimosProdutosAtualizados as $produto)
                <div class="media text-muted pt-3">
                  <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="32x32" class="mr-2 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1659ac98349%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1659ac98349%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.046875%22%20y%3D%2217.2%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 32px; height: 32px;">
                  <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                      <strong class="text-gray-dark">{{ $produto->nome }}</strong>
                    </div>
                    <span class="d-block">Última atualização em: {{ $produto->updated_at->format('d/m/Y H:i:s') }}</span>
                  </div>
                </div>
                @endforeach
                <small class="d-block text-right mt-3">
                  <a href="{{ route('produtos.index') }}">Ver todos os produtos</a>
                </small>
            </div>
        </div>
    </div>

@endcomponent