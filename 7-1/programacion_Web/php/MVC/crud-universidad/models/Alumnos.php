<!-- Alumnos.php -->
<?php

require_once './models/Conexion.php';

class Alumnos {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function obtenerAlumnos() {
        $query = "SELECT alumnos.*, carrera.nombre as nombre_carrera FROM alumnos INNER JOIN carrera ON alumnos.id_carrera = carrera.id_carrera";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function insertarAlumno($matricula, $nombre, $edad, $email, $id_carrera) {
        $query = "INSERT INTO alumnos (matricula, nombre, edad, email, id_carrera) VALUES ('$matricula', '$nombre', $edad, '$email', $id_carrera)";
        return $this->conexion->conectar()->query($query);
    }

    public function obtenerAlumnoPorId($id) {
        $query = "SELECT * FROM alumnos WHERE id = $id";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_assoc();
    }

    public function actualizarAlumno($id, $matricula, $nombre, $edad, $email, $id_carrera) {
        $query = "UPDATE alumnos SET matricula = '$matricula', nombre = '$nombre', edad = $edad, email = '$email', id_carrera = $id_carrera WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }

    public function eliminarAlumno($id) {
        $query = "DELETE FROM alumnos WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }
}
