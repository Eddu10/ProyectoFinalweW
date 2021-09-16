<?php
     include('../../../config/constantes.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transacción</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container p-4">
        <div class="row">          
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1>Transacción</h1>
                    </div>
                   <!-- <div class="card-body">
                        {{#if contacts}}
                        <ul class="list-group">
                            {{#each contacts}}
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{firstname}}
                                {{lastname}} / 
                                {{email}}
                                <a href="/delete-contact/{{@key}}" class="btn btn-danger">Delete</a>
                            </li>
                            {{/each}}
                        </ul>
                        {{else}}
                            <p>No Contacts Yet.</p>
                        {{/if}}
                    </div>-->
                    <div class="card-footer">
                        <form action="../Pantalla/index.html" method="POST">
                            <div class="form-group">
                                <select name="Tipo_Transaccion">

                                    <option>Tipo Transacción</option>

                                    <option>Ingreso</option>
                                    
                                    <option>Egreso</option>
                                    
                                    <option>Ahorro</option>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <h5>Monto</h5>
                                <input type="number" step=".01" name="Monto"  class="form-control">
                            </div>

                            <div class="form-group">
                                <h5>Fecha</h5>
                                <input type="date" name="Fecha"  class="form-control">
                            </div>

                            <div class="form-group">
                                <h5>Descripción</h5>
                                <input type="text" name="Descripción"  class="form-control">
                            </div>
                            <button class="btn btn-primary btn-block">
                                Añadir
                            </button>
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
        
        $tipo = $_POST['tipo'];
        $monto = $_POST['monto'];
        $fecha = $_POST['fecha'];
        $descripcion = $_POST['descripcion'];
        $nel = null;

        $conn1 = mysqli_connect(SERVIDOR,USERNAME,PASSWORD) or die(mysqli_error());

        $basedatos1 = mysqli_select_db($conn1, BASEDATOS) or die(mysqli_error());

        $sqlcrear = "INSERT INTO transaccion (id, tipo, monto, fecha, descripcion) 
        VALUES('$nel', '$tippo','$monto', '$fecha', '$descripcion')";

        //echo $sqlcrear;
        $res = mysqli_query($conn1, $sqlcrear);

        if($res == true){
            //$_SESSION['crear'] = "Tarea creada exitosamente!!";
            header('location:'.URLSITIO);
        }else{
            //$_SESSION['error_crear'] = "Error al crear la tarea!!";
            header('location:'.URLSITIO.'transaccion.php');
        }
    }
?>