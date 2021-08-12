<!doctype html>
    <html lang="pt-br">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Agrocroogle system register client and user page">
        <meta name="author" content="Renan Dias">
        <title>AGROCROODLE · Register</title>

        <!-- CSS -->
    <link href="../static/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link  href="../static/css/pages/register.css" rel="stylesheet">

        <!-- JS -->
        <script src="../static/js/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="../static/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="../static/js/pages/register.js" type="text/javascript"></script>

        <!-- PHP -->
        <?php

            include("./src/scripts/script.php");

        ?>

       <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../agrocroogle/public/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../agrocroogle/public/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../agrocroogle/public/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../agrocroogle/public/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../agrocroogle/public/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../agrocroogle/public/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../agrocroogle/public/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../agrocroogle/public/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../agrocroogle/public/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../agrocroogle/public/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../agrocroogle/public/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../agrocroogle/public/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../agrocroogle/public/favicon-16x16.png">
    <link rel="manifest" href="../agrocroogle/public/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
            
    </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
    <img class="mb-4" src="../../public/img/agrocroogle_logo.png" alt="" width="150" height="150">
      <h2>Cadastre-se</h2>
    </div>
   
      <div class="row align-items-center">
        <form class="needs-validation" novalidate>
        <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <li class="list-group-item d-flex justify-content-between bg-light">
            <div>
              <h6 class="my-0">Código de acesso</h6>
              </div>
          </li>
        </ul>

        <div class="input-group">
            <input type="text" class="form-control" placeholder="Ex: 1111">
          </div>
      </div>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nome</label>
              <input type="text" class="form-control" id="firstName" placeholder="Ex: João" value="" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Sobrenome</label>
              <input type="text" class="form-control" id="lastName" placeholder="Silva" value="" required>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="joao.silva@mail.com" required>
              <div class="invalid-feedback">
               Insira um email válido.
              </div>
            </div>

            <div class="col-md-5">
              <label for="phone" class="form-label">Celular</label>
              <input class="form-control" class="phone" type="tel" id="phone" required>
              <div class="invalid-feedback">
                Insira um telefone válido
              </div>
            </div>

            <div class="col-md">
              <label for="cpf" class="form-label">CPF</label>
              <input class="form-control" class="cpf" type="text" id="cpf" required>
              <div class="invalid-feedback">
                Insira um cpf válido
              </div>
            </div>

            <div class="col-12">
              <label for="street" class="form-label">Rua</label>
              <input type="text" class="form-control" id="street" placeholder="Rua 1234" required>
              <div class="invalid-feedback">
                Insira seu endereço corretamente
              </div>
            </div>

            <div class="col-sm-6">
              <label for="neighborhood" class="form-label">Bairro</label>
              <input type="text" class="form-control" id="neighborhood" placeholder="Centro">
            </div>

            <div class="col-md-2">
              <label for="uf" class="form-label">Estado</label>
              <select class="form-select" id="uf" required>
                <option value="">Escolha...</option>
                <option></option>
              </select>
              <div class="invalid-feedback">
                Seleciona um UF válido
              </div>
            </div>

            <div class="col-md-4">
              <label for="city" class="form-label">Cidade</label>
              <select class="form-select" id="uf" required>
                <option value="">Escolha...</option>
                <option></option>
              </select>
              <div class="invalid-feedback">
                Seleciona uma cidade válida
              </div>
            </div>

          </div>

          <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">Desenvolvido por Renan Dias</p>
  </footer>
</div>


    

      <script src="form-validation.js"></script>
  </body>
</html>
