<?php
    $datos = array(
        "nombre" => $_POST['nombre'],
        "paterno" => $_POST['apellido_paterno'],
        "materno" => $_POST['apellido_materno'],
        "empleado" => $_POST['empleado'],
        "correo" => $_POST['email'],
        "contrasenia" => $_POST['contrasenia'],

    );
    require_once '../control/control_usuarios.php';
    $usuario = new usuario();

    $respuesta = $usuario->registrar($datos);
    return $respuesta;

?>