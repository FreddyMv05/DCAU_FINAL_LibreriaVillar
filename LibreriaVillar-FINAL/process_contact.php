<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cedula = $_POST["cedula"];
    $nombre = $_POST["name"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $tema = $_POST["subject"];
    $mensaje = $_POST["message"];
    $fecha = date("Y-m-d"); // Obtiene la fecha actual

    require_once "ConexionDB.php";
    $conexionDB = new ConexionDB();
    $conexionDB->conectar("localhost", "id21096977_dblibreria", "id21096977_root", "@Amigos0528");
    $conexion = $conexionDB->getConexion();
try {
        // Verificar si la cédula ya está registrada
        $query_check = "SELECT COUNT(*) FROM contacto WHERE cedula = :cedula";
        $stmt_check = $conexion->prepare($query_check);
        $stmt_check->bindParam(":cedula", $cedula);
        $stmt_check->execute();

        if ($stmt_check->fetchColumn() > 0) {
            echo "Error: Cédula anteriormente registrada. ";
        } else {

        $query = "INSERT INTO contacto (cedula, fecha, nombre, apellido, telefono, correo_electronico, asunto, comentario) VALUES (:cedula, :fecha, :nombre, :apellido, :telefono, :correo_electronico, :asunto, :comentario)";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(":cedula", $cedula);
        $stmt->bindParam(":fecha", $fecha);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":apellido", $apellido);
        $stmt->bindParam(":telefono", $telefono);
        $stmt->bindParam(":correo_electronico", $email);
        $stmt->bindParam(":asunto", $tema);
        $stmt->bindParam(":comentario", $mensaje);

        // Ejecutar la consulta
        $stmt->execute();

        echo "Enviado correctamente.";
        }

        } catch (PDOException $e) {
        echo "Error al enviar el mensaje.";
    }
}

?>
