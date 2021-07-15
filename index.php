<?php
    require_once 'app/config.php'
?>

<!doctype html>
<html lang="es">
<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- se abre un tag de php para mandar a traer las dependencias -->
    <?php
    //? se requieres una sola vez he ignora los demas que esten debajo
    require_once 'app/dependencias.php';
    ?>

</head>
<body>
    <div class="container">
        <div class="row mt-2 shadow">
            <div class="col-sm-2 headleft"></div>
            <div class="col-sm-8 text-center"> <h1>Instituto Tecnologico Milpa Alta II</h1>  </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    <?php
    //?para el metodo get se usara la variable que se coloco en htaccess
    //?vistas de caso para cada caso se nombrara de diferente forma como queramos
    //?que se llame la ruta amigable
        if(isset($_GET['vista'])){
            switch ($_GET['vista']) {
                case 'registro':
                    require_once 'view/registro.php';
                    break;
                case 'test':
                    require_once 'app/conexion.php';
                    break;
                default:
                    echo 'error 404';
                    break;
            }
        }else{
            require_once 'view/login.php';
        }
    ?>
</body>
</html>