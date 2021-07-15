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
        <span class="btn pulse rounded-pill"><i class="fas fa-house-user mr-3"></i>inicio</span>
    </nav>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
           <div class="table-responsive">
               <table class="table table-hover " id="tablabusqueda">
                   <thead>
                       <tr class="table-success">
                           <th>NOMBRE</th>
                           <th>NUMERO DE SERIE</th>
                           <th>ID PROGRESIVO</th>
                           <th>UBICACION</th>
                           <th>CONSUMIBLE O INVENTARIABLE</th>
                           <th>ELIMINAR</th>
                       </tr>
                   </thead>
                   <tbody>
                       <tr class="table-light">
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                       </tr>
                   </tbody>
               </table>
           </div>
        </div>
    </div>
</div>
</body>
<script src="../manger/busqueda.js"></script>
</html>