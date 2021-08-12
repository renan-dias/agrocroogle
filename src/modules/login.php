<?php

?>
<!doctype html>
    <html lang="pt-br">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Agrocroogle system login page">
        <meta name="author" content="Renan Dias">
        <title>AGROCROODLE · Login</title>

        <!-- CSS -->
    <link href="../static/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link  href="../static/css/pages/login.css" rel="stylesheet">

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
  <body class="text-center">

  <!-- 
    <header class="mb-auto">
        <div>
            <nav class="nav nav-masthead justify-content-center float-md-end">
              <a class="nav-link active" aria-current="page" href="../../index.php">Login</a>
            </nav>
        </div>
    </header> 
    -->

<main class="form-signin">
  <form method="post">
    <img class="mb-4" src="../../public/img/agrocroogle_logo.png" alt="Logo Agrocroogle" width="100" height="100">
    <h1 class="h3 mb-3 fw-normal">Logue-se</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">email</label>
    </div>
   

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Manter conectado
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    <a href="register.php" class="link-primary">Registre-se</a>
    <p class="mt-5 mb-3 text-muted">Desenvolvido por Renan Dias - Design by bootstrap signin template</p>
  </form>
</main>


    
  </body>
</html>