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
	<body class="img js-fullheight"  method="POST"  style="background-image: url(images/fondo.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">EL FORANEO</h2>
					<img src="/login/images/Logo1.png" alt="">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Tienes una cuenta?</h3>
		      	<form action="../Pantalla/index.html" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Usuario" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Contraseña" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Ingresar</button>
	            </div>
	            <div class="form-group d-md-flex"  method="POST" >
	            	<div class="w-50">
		            	
								</div>
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

