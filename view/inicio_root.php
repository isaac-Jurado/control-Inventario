
<?php
        require_once '../app/config.php'
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <?php
        require_once '../app/dependencias.php';
    ?>
</head>
<body>
    <nav class="navbar navbar-light nabar ">
        <a class="navbar-brand" href="#">
            <img src="../raw/img/fondo.png" width="80" height="80" alt=""> </a>
            
            TECNOLOGICO MILPA ALTA II
            <span class="btn pulse rounded-pill"><i class="fas fa-door-open mr-3"></i>cerrar session</span>
        
    </nav>
    <div class="container  mt-5">
        <div class="row justify-content-center  mt-5">
            <div class="col-md-8 text-center">
                <a href="../view/agregar.php"><span class="btn btn_root  pulse mr-5 "> <i class="fas fa-plus-square iconos"></i><br> AGREGAR ELEMTENTO</span></a>
                <a href="../view/busqueda.php"><span class="btn  btn_root pulse"><i class="fas fa-search iconos"></i> <br> BUSCAR ELEMENTO</span></a>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 text-center ">
            
            <a href="../view/registroUsuario.php"><span class="btn  btn_root pulse">  <i class="fas fa-user-plus iconos"></i> <br> AGREGAR USUARIO</span></div></a>
                <a href="../view/registro.php"><span class="btn  btn_root pulse">  <i class="fas fa-user-plus iconos"></i> <br> AGREGAR ADMINISTRADOR</span></div></a>   
            </div>
           

            
        </div>
    
    
</body>
<script src="../manger/registro.js"></script>
</html>