<?php
include_once '../config/database.php';

class AuthController {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function login($email, $password) {
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND contra = '$password'";
        $result = $this->conn->query($sql);

        if ($result && $result->num_rows == 1) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            header("Location: ../public/index.php");
            exit();
        } else {
            echo "Credenciales incorrectas";
        }
    }

    public function register($nombres, $apellidos, $email, $fecha_nacimiento, $sexo, $password) {
        $sql = "INSERT INTO usuarios (nombres, apellidos, email, fecha_nac, sexo, contra) VALUES ('$nombres', '$apellidos', '$email', '$fecha_nacimiento', '$sexo', '$password')";

        if ($this->conn->query($sql) === TRUE) {
            echo "Usuario registrado exitosamente";
            header("Location: ../views/login.php");
        } else {
            echo "Error al registrar usuario: " . $this->conn->error;
        }
    }
}

$authController = new AuthController($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $authController->login($email, $password);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $sexo = $_POST['sexo'];
    $password = $_POST['password'];
    $authController->register($nombres, $apellidos, $email, $fecha_nacimiento, $sexo, $password);
}
?>
