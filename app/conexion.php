<?php
    // class conectar{
    //     public function conexion(){
    //         $servidor = 'localhost';
             $usuario = 'root';
             $contrasenia = '';
    //         $base = 'control';
    //         $conexion = mysqli_connect(
    //                                     $servidor,
    //                                     $usuario, 
    //                                     $contrasenia, 
    //                                     $base
    //         );
    //         return $conexion;
    //     }
    // } 
    $mbd = new PDO('mysql:host=localhost;dbname=control', $usuario, $contrasenia);
    if(isset($mbd)){
        echo 'conectado';
    }else{
        echo 'no conectado';
    }      
?>