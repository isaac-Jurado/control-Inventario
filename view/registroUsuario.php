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


<div class="container mt-5" >
    <!--  la clase justify-content-center centra nuestra row -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form class="shadow p-5 fondo_registro " id="form" method="post" onsubmit="return agregarUsuarioNuevi()">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                        <h2>Registro</h2>
                        </div>    
                    </div>
                    <HR>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nombre"><i class="fas fa-pencil-alt mr-2" ></i>Nombre(s)</label>
                                            <input type="text" class="form-control form-control-sm rounded-pill" id="nombre" name="nombre" placeholder="escribe tu(s) nombre(s)" pattern="[A-Z]{1,40}" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="apellido_paterno"><i class="fas fa-pencil-alt mr-2" ></i>Apellido paterno</label>
                                            <input type="text" class="form-control form-control-sm rounded-pill" id="apellido_paterno" name="apellido_paterno" placeholder="escribe tu apellido patenro"  required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="apellido_materno"><i class="fas fa-pencil-alt mr-2" ></i>Apellido materno</label>
                                            <input type="text" class="form-control form-control-sm rounded-pill" id="apellido_materno" name="apellido_materno" placeholder="escribe tu apellido materno"  required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="empleado"><i class="fas fa-id-card-alt mr-2"></i>No empleado</label>
                                            <input type="number" class="form-control form-control-sm rounded-pill" id="empleado" name="empleado" placeholder="No de empleado"  required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email"><i class="fas fa-at mr-2"></i>Email </label>
                                            <input type="email" class="form-control form-control-sm rounded-pill" id="email" name="email" placeholder="Escribe tu email"  required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="contrasenia"><i class="fas fa-lock mr-2"></i>Contraseña</label>
                                            <input type="text" class="form-control form-control-sm rounded-pill" id="contrasenia" name="contrasenia" placeholder="Escribe contraseña"  required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="confirmar_contrasenia"><i class="fas fa-lock mr-2"></i>Contraseña</label>
                                            <input type="text" class="form-control form-control-sm rounded-pill" id="confirmar_contrasenia" name="confirmar_contrasenia" placeholder="Confirma contraseña"  required="">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <hr class="hr-login">
                    <div class="row mt-3">
                        <div class="col-sm-12 text-center">
                            <span class="btn botones rounded-pill" id="boton_registrar"><i class="fas fa-sign-in-alt mr-2"></i>Registrar</span>
                        </div>
                    </div>   
                </div>
            </form>
        </div>
    </div>
</div>

</body>
<script src="../manger/registro.js"></script>
<!-- <script type="text/javascript">

    function agregarUsuarioNuevi(){
        $.ajax({
            method:"POST",
            date:$('#form').serialize(),
            url:"manger/agregarUsuario.php" ,
            success:function(respuesta){
                alert (respuesta);
            }
        })
        return false;
    }
</script> -->
</html>
