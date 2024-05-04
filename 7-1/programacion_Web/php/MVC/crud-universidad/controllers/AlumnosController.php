<!-- AlumnosController.php -->
<?php

require_once './models/Alumnos.php';

class AlumnosController {
    private $alumnosModel;

    public function __construct() {
        $this->alumnosModel = new Alumnos();
    }

    public function index() {
        $alumnos = $this->alumnosModel->obtenerAlumnos();
        include './views/alumnos/index.php';
    }

    public function alta() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $matricula = $_POST['matricula'];
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $email = $_POST['email'];
            $id_carrera = $_POST['id_carrera'];
            $this->alumnosModel->insertarAlumno($matricula, $nombre, $edad, $email, $id_carrera);
            header("Location: index.php");
        } else {
            include './views/alumnos/alta.php';
        }
    }

    public function editar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $matricula = $_POST['matricula'];
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $email = $_POST['email'];
            $id_carrera = $_POST['id_carrera'];
            $this->alumnosModel->actualizarAlumno($id, $matricula, $nombre, $edad, $email, $id_carrera);
            header("Location: index.php");
        } else {
            $id = $_GET['id'];
            $alumno = $this->alumnosModel->obtenerAlumnoPorId($id);
            include './views/alumnos/editar.php';
        }
    }

    public function eliminar() {
        $id = $_GET['id'];
        $this->alumnosModel->eliminarAlumno($id);
        header("Location: index.php");
    }
}
