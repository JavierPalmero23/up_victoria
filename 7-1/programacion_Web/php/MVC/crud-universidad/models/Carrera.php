<!-- Carrera.php -->
<?php

require_once './models/Conexion.php';

class Carrera {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function obtenerCarreras() {
        $query = "SELECT * FROM carrera";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function insertarCarrera($nombre) {
        $query = "INSERT INTO carrera (nombre) VALUES ('$nombre')";
        return $this->conexion->conectar()->query($query);
    }

    public function obtenerCarreraPorId($id) {
        $query = "SELECT * FROM carrera WHERE id_carrera = $id";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_assoc();
    }

    public function actualizarCarrera($id, $nombre) {
        $query = "UPDATE carrera SET nombre = '$nombre' WHERE id_carrera = $id";
        return $this->conexion->conectar()->query($query);
    }

    public function eliminarCarrera($id) {
        $query = "DELETE FROM carrera WHERE id_carrera = $id";
        return $this->conexion->conectar()->query($query);
    }
}
