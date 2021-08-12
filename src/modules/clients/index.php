<!doctype html>
    <html lang="pt-br">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Agrocroogle system login page">
        <meta name="author" content="Renan Dias">
        <title>AGROCROODLE · Dashboard</title>

        <!-- CSS -->
    <link href="../../static/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link  href="../../static/css/bootstrap/bootstrap-icons.css" rel="stylesheet">
    <link  href="../../static/css/pages/dashboard.css" rel="stylesheet">
   
        <!-- JS -->
    <script src="../../static/js/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="../../static/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../static/js/pages/dashboard.js" type="text/javascript"></script>

        <!-- JS lib -->
     <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
     
        <!-- PHP -->
    <?php

        include("../../scripts/script.php");

    ?>

       <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../../../public/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../../public/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../../public/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../../public/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../../public/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../../public/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../../public/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../../public/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../../public/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../../../android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../public/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../../public/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../public/favicon-16x16.png">
    <link rel="manifest" href="../../../public/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
            
    </head>
  <body>
    
 <!-- 
    Menu area
-->
  
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../../../index.php">Agrocroogle</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sair</a>
    </div>
  </div>
</header>

<!-- 
    Menu area
-->

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
         
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Operações</span>
          <a class="link-secondary" href="#" aria-label="CRUD produtos">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
           <!--  <a class="nav-link" id="add_button" href="#">
              <span data-feather="file-text"></span>
              Cadastrar produto
            </a> -->
            <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success btn-lg">Add Course</button>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="edit_button" href="#">
              <span data-feather="file-text"></span>
              Editar produto
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" id="delete_button" href="#">
              <span data-feather="file-text"></span>
              Remover produto
            </a>
          </li>
        </ul>
      </div>
    </nav>

<!-- 
    Dashboard actions
-->

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
          </div>
        </div>
      </div>

<!-- 
    Table area
-->

      <h2>Produtos</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Valor (R$)</th>
              <th scope="col">Data</th>
              <th scope="col">Descrição</th>
            </tr>
          </thead>
        </table>
      </div>
    </main>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  </body>
</html>

<div id="userModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="course_form" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Course</h4>
                </div>
                <div class="modal-body">
                    <label>Enter Course Name</label>
                    <input type="text" name="course" id="course" class="form-control" />
                    <br />
                    <label>Enter Number of Students</label>
                    <input type="text" name="students" id="students" class="form-control" />
                    <br /> 
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="course_id" id="course_id" />
                    <input type="hidden" name="operation" id="operation" />
                    <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" />
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

