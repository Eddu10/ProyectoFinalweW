<?php
     include('../../config/constantes.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir objetivo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/lumen/bootstrap.min.css">
</head>

<body>
    <div class="container p-4">
        <div class="row">          
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1>Añadir objetivo</h1>
                    </div>
                    <div class="card-footer">
                        <form action="" method="POST">
                            <div class="form-group">
                                <h5>Producto</h5>
                                <input type="text" name="producto"  class="form-control">
                            </div>

                            <div class="form-group">
                                <h5>Costo</h5>
                                <input type="number" step=".01" name="costo"  class="form-control">
                            </div>
                            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Añadir Objeto">
                            <!--<button class="btn btn-primary btn-block">
                                Añadir objetivo
                            </button>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
    if(isset($_POST['submit'])){
        
        $producto = $_POST['producto'];
        $costo = $_POST['costo'];

        $conn1 = mysqli_connect(SERVIDOR,USERNAME,PASSWORD) or die(mysqli_error());

        $basedatos1 = mysqli_select_db($conn1, BASEDATOS) or die(mysqli_error());

        $sqlcrear = "INSERT INTO objetivo (producto, costo) VALUES('$producto','$costo')";

        //echo $sqlcrear;
        $res = mysqli_query($conn1, $sqlcrear);

        if($res == true){
            //$_SESSION['crear'] = "Tarea creada exitosamente!!";
            header('location: http://localhost/Proyecto/Vistas/Pantalla/examples/icons.php');
        }else{
            //$_SESSION['error_crear'] = "Error al crear la tarea!!";
            header('location: http://localhost/Proyecto/Vistas/Pantalla/objetivos.php');
        }
    }
?>