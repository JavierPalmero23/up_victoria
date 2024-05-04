<?php
    //conexion
    include 'db.php';
    
    // alumnos //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if(isset($_POST['alta_alumno'])){
        $matricula = $_POST['matricula'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $id_carrera = $_POST['id_carrera'];
        $sql = "INSERT INTO alumnos (matricula, nombre, edad, email, id_carrera) VALUES ('$matricula', '$nombre', '$edad', '$email', '$id_carrera')";
        $result = $conn->query($sql);
    
        if($result){
            header("Location: listado_alumno.php");
        } else {
            echo "Error al agregar el alumno: " . $conn->error;
        }
        exit();
    }
    
    if(isset($_POST['eliminar_alumno'])){
        $id_alumno = $_POST['id_alumno'];
        $sql = "DELETE FROM alumnos WHERE id_alumno = '$id_alumno'";
        $result = $conn->query($sql);
    
        if($result){
            header("Location: listado_alumnos.php");
        } else {
            echo "Error al eliminar el alumno: " . $conn->error;
        }
        exit();
    }

    if(isset($_POST['cambio_alumno'])){
        $id = $_POST['id_alumno'];
        $matricula=$_POST['matricula'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $carrera = $_POST['id_carrera'];
        $sql="UPDATE alumnos SET matricula='$matricula',nombre='$nombre',edad='$edad',email='$email',id_carrera='$carrera' WHERE id_alumno=$id";
        $result = $conn->query($sql);
    
        if($result){
            header("Location: listado_alumno.php");
        } else {
            echo "Error al editar el alumno: " . $conn->error;
        }
        exit();
    }


    // carreras //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    if(isset($_POST['alta_carrera'])){
        $id_carrera=$_POST['id_carrera'];
        $nombre = $_POST['nombre_carrera'];
    
        $sql="INSERT INTO carrera (id_carrera, nombre) VALUES ('$id_carrera','$nombre')";
        $result = $conn->query($sql);
        if($result){
            header("Location: listado_carrera.php");
        } else {
            echo "Error al agregar la carrera: " . $conn->error;
        }
        exit();
    }

    if(isset($_POST['eliminar_carrera'])){
        $id_carrera = $_POST['id_carrera'];
        $sql = "DELETE FROM carrera WHERE id_carrera = '$id_carrera'";
        $result = $conn->query($sql);
        if($result){
            header("Location: listado_carrera.php");
        } else {
            echo "Error al eliminar la carrera: " . $conn->error;
        }
    exit();
    }

    if(isset($_POST['actualizar_carrera'])){
        $id_carrera = $_POST['id_carrera'];
        $nombre_carrera = $_POST['nombre_carrera'];
    
        $sql = "UPDATE carrera SET nombre='$nombre_carrera' WHERE id_carrera=$id_carrera";
        $result = $conn->query($sql);
    
        if($result){
            header("Location: listado_carrera.php");
        } else {
            echo "Error al actualizar la carrera: " . $conn->error;
        }
        exit();
    }

    // materias //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    if(isset($_POST['alta_materia'])){
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $sql = "INSERT INTO materia (nombre, descripcion) VALUES ('$nombre', '$descripcion')";
        $result = $conn->query($sql);
        if($result){
            header("Location: listado_materia.php");
        } else {
            echo "Error al actualizar la carrera: " . $conn->error;
        }
        exit();
    }
    
    if(isset($_POST['asignar_materia'])){
        $id_materia = $_POST['id_materia'];
        $id_carrera = $_POST['id_carrera'];
        $sql = "INSERT INTO materias_carreras (id_materia, id_carrera) VALUES ('$id_materia', '$id_carrera')";
        $result = $conn->query($sql);
        if($result){
            header("Location: listado_materia.php");
        } else {
            echo "Error al actualizar la carrera: " . $conn->error;
        }
        exit();
    }

    if(isset($_POST['actualizar_materia'])){
        $id_materia = $_POST['id_materia'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $sql = "UPDATE materia SET nombre='$nombre', descripcion='$descripcion' WHERE id_materia='$id_materia'";
        $result = $conn->query($sql);
        if($result){
            header("Location: listado_materia.php");
        } else {
            echo "Error al actualizar la carrera: " . $conn->error;
        }
        exit();
    }
    
    if(isset($_POST['eliminar_materia'])){
        $id_materia = $_POST['id_materia'];
        $sql = "DELETE FROM materias_carreras WHERE id_materia='$id_materia'";
        $result = $conn->query($sql);
        $sql = "DELETE FROM materia WHERE id_materia='$id_materia'";
        $result = $conn->query($sql);
        if($result){
            header("Location: listado_materia.php");
        } else {
            echo "Error al actualizar la carrera: " . $conn->error;
        }
        exit();
    }    
    
    
    // alumnos - materias //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if(isset($_POST['asignar_alumno_materia'])){
        $id_alumno = $_POST['id_alumno'];
        $id_materia = $_POST['id_materia'];
        $sql = "INSERT INTO alumno_materia (id_alumno, id_materia) VALUES ('$id_alumno', '$id_materia')";
        $result = $conn->query($sql);
        if($result){
            header("Location: listado_alumno_materia.php");
        } else {
            echo "Error al asignar la materia al alumno: " . $conn->error;
        }
    }

?>