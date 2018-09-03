
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Administração de Produtos</title>

    <!-- Default CSS -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/custom.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Teste PHP</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('/*') ? 'active' : '' }}" href="{{ route('dashboard')}}">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('produtos*') ? 'active' : '' }}" href="{{ route('produtos.index')}}">
                  <span data-feather="shopping-cart"></span>
                  Produtos
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          {{ $slot }}
        </main>
      </div>
    </div>

    <!-- Default JS -->
    <script src="/js/app.js"></script>
    <script src="//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>

    <script type="text/javascript">
        $('#detalheProduto').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('info') // Extract info from data-* attributes

          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('Informações de ' + recipient.nome)
          modal.find('.modal-body input#recipient-nome').val(recipient.nome)
          modal.find('.modal-body textarea#recipient-descricao').val(recipient.descricao)
          modal.find('.modal-body input#recipient-quantidade').val(recipient.quantidade)
          modal.find('.modal-body input#recipient-preco').val(recipient.preco)
          modal.find('.modal-body input#recipient-created_at').val((new Date(recipient.created_at)).toLocaleString())
          modal.find('.modal-body input#recipient-updated_at').val((new Date(recipient.updated_at)).toLocaleString())
        });

        $('#preco').mask("#.##0,00", {reverse: true});
    </script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>