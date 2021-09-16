<?php
     include('../../../config/constantes.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Objetivos</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a>
          <img src="../assets/img/brand/blue.png"  width="120" height="120" alt="">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Principal</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="icons.php">
                <img src="../assets/img/icons/objetivos.png" alt="">
                
                <span class="nav-link-text">Objetivos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../login/login.php">
                <img src="../assets/img/icons/salida.png" alt="">
                <span class="nav-link-text">Salir</span>
              </a>
            </li>
            
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
         
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
        
          <!-- Navbar links -->
         
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Objetivos</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class=" col ">
          <div class="card">
            <div class="card-header bg-transparent">
              <h3 class="mb-0">Objetivos</h3>
            </div>
            <div class="card-body">
              <div class="col-xl-8">
                <div class="card">
                  <div class="card-header border-0">
                    <div class="row align-items-center">
                      <div class="col">
                        <h3 class="mb-0">Objetivos</h3>
                      </div>
                      <div class="col text-right">
                        <a href="../objetivos.php" class="btn btn-sm btn-primary">Añadir objetivo</a>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">Producto</th>
                          <th scope="col">Costo</th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        <?php
                          $conn=mysqli_connect(SERVIDOR,USERNAME,PASSWORD,'') or die(mysqli_error());
                            $basedatos=mysqli_select_db($conn,BASEDATOS);
                            $sql="SELECT * FROM objetivo";
                            $res=mysqli_query($conn,$sql);
                            if($ress=true){
                              //se ejecuto la sentencias
                              $numfilas=mysqli_num_rows($res);
                              if($numfilas>0){
                                while($fila=mysqli_fetch_assoc($res)){
                                  $producto=$fila['producto'];
                                  $costo=$fila['costo'];

                                  $ahorro_actual=($_GET["ahorro_actual"]);

                                  ?>
                                                        
                                  <tr>
                                    <td><?php echo $producto?></td>
                                    <td><?php echo $costo?></td>
                                    <td><?php echo $ahorro_actual?></td>
                                  </tr>
                                  <?php
                                }
                              }else{
                                //no existe datos
                                ?>
                                <tr>
                                  <td colspan='2'>Aun no se han agregado productos</td>
                                </tr>
                                <?php
                              }
                            }
                        ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; Software ESPE 2021
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/clipboard/dist/clipboard.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>