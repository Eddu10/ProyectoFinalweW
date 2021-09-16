<?php
     include('../../config/constantes.php');
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet"/>

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	
	<link href="../login/css/style.css" rel="stylesheet"/>

	</head>
	<body class="img js-fullheight" style="background-image: url(images/fondo.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<img src="images/Logo1.png" alt="">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Tienes una cuenta?</h3>
		      	<form action="" method="POST" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="user" placeholder="Usuario" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" name="pass" class="form-control" placeholder="Contraseña" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
					
	            	<input type="submit" name="submit" value="Iniciar Sesión" class="form-control btn btn-primary submit px-3">
	            </div>
	            <div class="form-group d-md-flex">
								<div class="w-50 text-md-right">
									<a href="../Signin/signin.php" style="color: #fff">Crear una nueva cuenta</a>
								</div>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/validacion.js"></script>

	</body>
</html>

<?php
  if(isset($_POST['submit'])){
        
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $conn = mysqli_connect(SERVIDOR,USERNAME,PASSWORD) or die(mysqli_error());

    $basedatos = mysqli_select_db($conn, BASEDATOS) or die(mysqli_error());

    $sql="SELECT * FROM estudiante";
    $res=mysqli_query($conn,$sql);
    if($ress=true){
      //se ejecuto la sentencias
      $numfilas=mysqli_num_rows($res);
      if($numfilas>0){
        while($fila=mysqli_fetch_assoc($res)){
          $usuario=$fila['usuario'];
          $contrasena=$fila['contrasena'];
          if(($usuario == $user) && ($contrasena == $pass)){
            $comp = true;
          }
          if(($usuario != $user) || ($contrasena != $pass)){
            $comp = false;
          }
        }
      }
    
    if(($res == $comp)){
        header('location: http://localhost/Proyecto/Vistas/Pantalla/examples/dashboard.php');
    }else{
        header('location: http://localhost/Proyecto/Vistas/login/login.php');
    }
  }
}
?>