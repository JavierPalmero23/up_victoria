<?php

    include 'bd.php';
    if(isset($_POST['reg'])){
    $nombre=$_POST['nombre'];
    $tipo=$_POST['tipo'];
    if($tipo="basico"){
        $cantidad=null;
    }else{
        $cantidad=$_POST['cantidad_ingr'];
    }
    $precio=$_POST['precio'];
    $sql="INSERT INTO platillo (nombre, tipo, cantidad_ingr, precio) VALUES ('$nombre','$tipo','$cantidad','$precio')";
    $res=$conn->query($sql);
    if ($res) {
        echo "Platillo registrado exitosamente!";
    } else {
        echo "Error al registrar platillo: ";
    }
    }

?>