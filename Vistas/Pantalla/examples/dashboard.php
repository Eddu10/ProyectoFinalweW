<?php
     include('../../../config/constantes.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Página Principal</title>
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
              <a class="nav-link active" href="dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Principal</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="icons.php">
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
              <h6 class="h2 text-white d-inline-block mb-0">Página Principal</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="../transaccion.php" class="btn btn-sm btn-neutral">Nueva Transaccion</a>
              
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
           
           
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Saldo Actual</h5>
                      <?php
                          $conn=mysqli_connect(SERVIDOR,USERNAME,PASSWORD,'') or die(mysqli_error());
                            $basedatos=mysqli_select_db($conn,BASEDATOS);
                            $sql="SELECT * FROM transaccion";
                            $res=mysqli_query($conn,$sql);
                            $monto_actual=0;
                            $ingreso = "Ingreso";
                            $egreso = "Egreso";
                            if($ress=true){
                              //se ejecuto la sentencias
                              $numfilas=mysqli_num_rows($res);
                              if($numfilas>0){
                                
                                while($fila=mysqli_fetch_assoc($res)){
                                  $tipo_tr=$fila['tipo_tr'];
                                  $monto=$fila['monto'];  
                                  if ($tipo_tr == $ingreso) {
                                    $monto_actual=$monto_actual+$monto;
                                  }
                                  if ($tipo_tr == $egreso){
                                    $monto_actual=$monto_actual-$monto;
                                  }
                                  ?>
                                  <?php
                                }
                                ?>
                                  <tr>
                                    <td><?php echo $monto_actual?></td>
                                  </tr>
                                  <?php 
                              }else{
                                //no existe datos
                                ?>
                                <tr>
                                  <td colspan='4'>No hay saldo actual</td>
                                </tr>
                                <?php
                              }
                            }
                        ?>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Ahorro</h5>
                      <?php
                          $conn=mysqli_connect(SERVIDOR,USERNAME,PASSWORD,'') or die(mysqli_error());
                            $basedatos=mysqli_select_db($conn,BASEDATOS);
                            $sql="SELECT * FROM transaccion";
                            $res=mysqli_query($conn,$sql);
                            $ahorro_actual=0;
                            if($ress=true){
                              //se ejecuto la sentencias
                              $numfilas=mysqli_num_rows($res);
                              if($numfilas>0){
                                
                                while($fila=mysqli_fetch_assoc($res)){
                                  $tipo_tr=$fila['tipo_tr'];
                                  $monto=$fila['monto'];
                                  ?>
                                   
                                  <?php  
                                  if ($tipo_tr == "Ahorro") {
                                    $ahorro_actual=$ahorro_actual+$monto;
                                  }
                                  ?>
                                  <a href="icons.php?ahorro_actual"></a>
                                  <?php  
                                }
                                ?>
                                <tr>
                                  <td><?php echo $ahorro_actual?></td>
                                </tr>
                                  <?php
                              }else{
                                //no existe datos
                                ?>
                                <tr>
                                  <td colspan='4'>No existe ahorro</td>
                                </tr>
                                <?php
                              }
                            }
                        ?>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                   
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
  
      <div class="col-xl-8">
                <div class="card">
                  <div class="card-header border-0">
                    <div class="row align-items-center">
                      <div class="col">
                        <h3 class="mb-0">Transacciones</h3>
                      </div>
                      
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">Tipo de Transacción</th>
                          <th scope="col">Monto</th>
                          <th scope="col">Fecha</th>
                          <th scope="col">Descripción</th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        <?php
                          $conn=mysqli_connect(SERVIDOR,USERNAME,PASSWORD,'') or die(mysqli_error());
                            $basedatos=mysqli_select_db($conn,BASEDATOS);
                            $sql="SELECT * FROM transaccion";
                            $res=mysqli_query($conn,$sql);
                            if($ress=true){
                              //se ejecuto la sentencias
                              $numfilas=mysqli_num_rows($res);
                              if($numfilas>0){
                                while($fila=mysqli_fetch_assoc($res)){
                                  $tipo_tr=$fila['tipo_tr'];
                                  $monto=$fila['monto'];
                                  $fecha=$fila['fecha'];
                                  $descripcion=$fila['descripcion'];
                                  ?>
                                                        
                                  <tr>
                                    <td><?php echo $tipo_tr?></td>
                                    <td><?php echo $monto?></td>
                                    <td><?php echo $fecha?></td>
                                    <td><?php echo $descripcion?></td>
                                  </tr>
                                  <?php
                                }
                              }else{
                                //no existe datos
                                ?>
                                <tr>
                                  <td colspan='4'>Aun no se han agregado transacciones</td>
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

      <div class="row">
        
        
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
               
            </div>
          </div>
          <div class="col-lg-6">
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
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>