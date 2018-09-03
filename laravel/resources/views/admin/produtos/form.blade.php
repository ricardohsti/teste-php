<div class="form-group">
	<label for="nome">Nome</label>
	<input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" id="nome" name="nome" placeholder="Informe o nome do produto" value="{{ $produto->nome ?? '' }}">
  	@if($errors->has('nome'))
      	@foreach ($errors->get('nome') as $mensagem)
      	<div class="invalid-feedback">
        	{{ $mensagem }}
      	</div>
      	@endforeach
    @endif
</div>
<div class="form-group">
	<label for="descricao">Descrição</label>
	<textarea class="form-control {{ $errors->has('descricao') ? 'is-invalid' : '' }}" id="descricao" name="descricao" rows="3" placeholder="Descreva o produto em poucas palavras">{{ $produto->descricao ?? '' }}</textarea>
  	@if($errors->has('descricao'))
        @foreach ($errors->get('descricao') as $mensagem)
        <div class="invalid-feedback">
          {{ $mensagem }}
        </div>
        @endforeach
    @endif
</div>
<div class="form-group">
	<label for="quantidade">Quantidade</label>
	<input type="text" class="form-control {{ $errors->has('quantidade') ? 'is-invalid' : '' }}" id="quantidade" name="quantidade" placeholder="Informe a quantidade em estoque" value="{{ $produto->quantidade ?? '' }}">
  	@if($errors->has('quantidade'))
        @foreach ($errors->get('quantidade') as $mensagem)
        <div class="invalid-feedback">
          {{ $mensagem }}
        </div>
        @endforeach
    @endif
</div>
<div class="form-group">
	<label for="preco">Preço</label>
	<input type="text"  class="form-control {{ $errors->has('preco') ? 'is-invalid' : '' }}" id="preco" name="preco" placeholder="Informe o preço do produto" value="{{ $produto->preco ?? '' }}">
  	@if($errors->has('preco'))
        @foreach ($errors->get('preco') as $mensagem)
        <div class="invalid-feedback">
          {{ $mensagem }}
        </div>
        @endforeach
    @endif
</div>
@isset($produto)
  <div class="form-group">
    <label for="created_at">Data de inclusão</label>
    <input type="text" class="form-control" id="created_at" value="{{ $produto->created_at->format('d/m/Y H:i:s') }}" disabled="disabled">
  </div>
  <div class="form-group">
    <label for="updated_at">Data da última alteração</label>
    <input type="text" class="form-control" id="updated_at" value="{{ $produto->updated_at->format('d/m/Y H:i:s') }}" disabled="disabled">
  </div>
@endisset

<button class="btn btn-primary" type="submit">Salvar</button>
<a href="{{ route('produtos.index') }}" class="btn btn-primary">Voltar a listagem</a>