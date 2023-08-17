<?php
class ConexionDB{
    private $conexion;

    public function conectar($host, $dbname, $username, $password){

        try{
            $this->conexion = new PDO("mysql:host=$host;port=3307;dbname=$dbname", $username, $password);

            // Manejador de error
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo "Error de conexion: " . $e->getMessage();
        }
    }

    public function getConexion(){
        return $this->conexion;
    }
}

?>