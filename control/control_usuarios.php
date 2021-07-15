<?php
    class usuario {
        private object $conexion;
        private string $host = 'localhost';
        private string $user = 'root';
        private string $db = 'control';
        private string $password = '';

        public function _construct(){
            $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password); 
        }

        public function registrar(array $datos){
            $query ='INSERT INTO ad(nombre,paterno,materno,empleado,correo,contrasenia) values(:nombre, :paterno:,materno,:empleado,:correo,:contrasenia)';
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam('nombre', $datos['nombre']);
            $stmt->bindParam('paterno', $datos['paterno']);
            $stmt->bindParam('materno', $datos['materno']);
            $stmt->bindParam('empleado', $datos['empleado']);
            $stmt->bindParam('correo', $datos['correo']);
            $stmt->bindParam('contrasenia', $datos['contrasenia']);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;
        }
    }
?>