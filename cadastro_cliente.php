<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>

  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Cadastro do Cliente</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>

  <!-- download -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<form action="insert.php" method="post">
  <div class="container">
  <div class="row" style="margin-top: 100px;">
    <h2>Dados do Cliente</h2>

    <div class="row">
      <div class="col-12">
        <input type="text" name="nome" class="form-control" placeholder="Nome do Cliente" aria-label="First name">
      </div>
      <div class="col-8 espaço">
        <input type="text" name="endereco" class="form-control" placeholder="Digite o Endereço" aria-label="Last name">
      </div>
      <div class="col-4 espaço">
        <input type="text" name="numero" class="form-control" placeholder="Número" aria-label="Last name">
      </div>
      <div class="col-5 espaço">
        <input type="text" name="cidade" class="form-control" placeholder="Cidade" aria-label="Last name">
      </div>
      <div class="col-5 espaço">
        <input type="text" name="bairro" class="form-control" placeholder="Bairro" aria-label="Last name">
      </div>
      <div class="col-2 espaço">
        <input type="text" name="estado" class="form-control" placeholder="Estado" aria-label="Last name">
      </div>
      <div class="col-4 espaço">
        <input type="text" name="cep" class="form-control" id="cep" placeholder="CEP" aria-label="Last name">
      </div>
      <div class="col-8 espaço">
        <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Telefone" aria-label="Last name">
      </div>
      <div class="col-6 espaço">
        <input type="text" name="cpf" class="form-control" id="cpf" placeholder="CPF" aria-label="Last name">
      </div>
      <div class="col-6 espaço">
        <input type="text" name="rg" id="rg" class="form-control" placeholder="RG" aria-label="Last name">
      </div>
      <div class="col-12 espaço">
        <input type="text" name="email" class="form-control" placeholder="E-mail" aria-label="Last name">
      </div>

    <div class="col-10 espaço"></div>
    <div class="col-2"><input class="btn btn-success" type="submit" value="Cadastrar"></div>
</div>
</form>

<script type="text/javascript">
$("#telefone").mask("(00) 00000-0000");
$("#cep").mask("00000-000");
$("#rg").mask("00.000.000-0");
$("#cpf").mask("000.000.000-00");
</script>

</body>
</html>