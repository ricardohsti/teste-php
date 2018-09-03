@component('admin.layouts.elements.body')
    @slot('title') Edição @endslot
    @slot('description') Produtos @endslot

    <form method="POST" action="{{ route('produtos.update', $produto->id) }}">
    	@csrf
    	<input type="hidden" name="_method" value="PUT">
    	  		
  		@include('admin.produtos.form')
	</form>

@endcomponent