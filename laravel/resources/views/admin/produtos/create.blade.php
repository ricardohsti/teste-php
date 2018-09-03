@component('admin.layouts.elements.body')
    @slot('title') Cadastro @endslot
    @slot('description') Produto @endslot

    <form method="POST" action="{{ route('produtos.store') }}">
    	@csrf
  		
  		@include('admin.produtos.form')
	</form>

@endcomponent