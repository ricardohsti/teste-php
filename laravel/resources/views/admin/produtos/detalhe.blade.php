<div class="modal fade" id="detalheProduto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-nome" class="col-form-label">Nome:</label>
            <input type="text" class="form-control" id="recipient-nome" readonly="readonly">
          </div>
          <div class="form-group">
            <label for="recipient-descricao" class="col-form-label">Message:</label>
            <textarea class="form-control" id="recipient-descricao" readonly="readonly"></textarea>
          </div>
          <div class="form-group">
            <label for="recipient-quantidade" class="col-form-label">Quantidade:</label>
            <input type="text" class="form-control" id="recipient-quantidade" readonly="readonly">
          </div>
          <div class="form-group">
            <label for="recipient-preco" class="col-form-label">Preço:</label>
            <input type="text" class="form-control" id="recipient-preco" readonly="readonly">
          </div>
          <div class="form-group">
            <label for="recipient-created_at" class="col-form-label">Data Inclusão:</label>
            <input type="text" class="form-control" id="recipient-created_at" readonly="readonly">
          </div>
          <div class="form-group">
            <label for="recipient-updated_at" class="col-form-label">Data Últ. Alteração:</label>
            <input type="text" class="form-control" id="recipient-updated_at" readonly="readonly">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>