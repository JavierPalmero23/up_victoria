<?php
//CRUD SERVICIOS
    include 'db.php';

    // VEHICULOS
    if(isset($_POST['alta_vehiculo'])){         //para registrar un vehiculos
        $num_serie = $_POST['num_serie'];
        $marca = $_POST['marca'];
        $submarca = $_POST['submarca'];
        $modelo = $_POST['modelo'];
        $tipo = $_POST['tipo'];
        $color = $_POST['color'];
        $capacidad = $_POST['capacidad'];
        $procedencia = $_POST['procedencia'];
        $sql = "INSERT INTO vehiculo (num_serie, marca, submarca, modelo, tipo, color, capacidad, procedencia) VALUES ('$num_serie', '$marca', '$submarca', '$modelo', '$tipo', '$color', '$capacidad', '$procedencia')";
        $result = $conn->query($sql);
        if($result){
            header("Location: lista_vehiculo.php");
        } else {
            echo "<script>alert('Error al agregar el vehiculo:'.".$conn->error."')</script>"; 
            sleep(3);
            header("Location: lista_vehiculo.php");
        }
        exit(); //en ocasiones el servidor se queda en el crud, tras investigar enontre que se recomienda cerrar la funcion para evitar que sigue leyedo el crud
    }

    if(isset($_POST['cambio_vehiculo'])){       //para modificar un vehiculo
        $id_vehiculo = $_POST['id_vehiculo'];
        $num_serie = $_POST['num_serie'];
        $marca = $_POST['marca'];
        $submarca = $_POST['submarca'];
        $modelo = $_POST['modelo'];
        $tipo = $_POST['tipo'];
        $color = $_POST['color'];
        $capacidad = $_POST['capacidad'];
        $procedencia = $_POST['procedencia'];
        $sql = "UPDATE vehiculo SET marca = '$marca', submarca = '$submarca', modelo = '$modelo', tipo = '$tipo', color = '$color', capacidad = '$capacidad', procedencia = '$procedencia' WHERE id_vehiculo = '$id_vehiculo'";
        $result = $conn->query($sql);
        if($result){
            header("Location: lista_vehiculo.php");
        } else {
            echo "Error al editar el vehiculo: " . $conn->error;
            sleep(3);
            header("Location: lista_vehiculo.php");
        }
        exit();
    }

    if(isset($_POST['baja_vehiculo'])){         //para eliminar un vehiculo
        $id_vehiculo = $_POST['id_vehiculo'];
        $sql = "DELETE FROM vehiculo WHERE id_vehiculo = ".$id_vehiculo;
        $result = $conn->query(($sql));
        if($result){
            header("Location: lista_vehiculo.php");
        } else {
            echo "Error al eliminar el vehiculo: " . $conn->error;
            sleep(3);
            header("Location: lista_vehiculo.php");
        }
        exit();
    }

    

    // SERVICIOS
    if(isset($_POST['alta_servicio'])){         //para registrar un servicio
        $nombre = $_POST['nombre'];
        $costo = $_POST['costo'];
        $sql = "INSERT INTO servicio (nombre, costo) VALUES ('$nombre', '$costo')";
        $result = $conn->query($sql);
        if($result){
            header("Location: lista_servicio.php");
        } else {
            echo "Error al agregar el servicio: " . $conn->error;
            sleep(3);
            header("Location: lista_servicio.php");
        }
        exit();
    }
    
    if(isset($_POST['cambio_servicio'])){       //para modificar un servicio
        $id_servicio = $_POST['id_servicio'];
        $nombre = $_POST['nombre'];
        $costo = $_POST['costo'];
        $sql = "UPDATE servicio SET nombre = '$nombre', costo = '$costo' WHERE id_servicio = '$id_servicio'";
        $result = $conn->query($sql);
        if($result){
            header("Location: lista_servicio.php");
        } else {
            echo "Error al editar el servicio: " . $conn->error;
            sleep(3);
            header("Location: lista_servicio.php");
        }
        exit();
    }

    if(isset($_POST['baja_servicio'])){         //para eliminar un servicio
        $id_servicio = $_POST['id_servicio'];
        $sql = "DELETE FROM servicio WHERE id_servicio = ".$id_servicio;
        $result = $conn->query(($sql));
        if($result){
            header("Location: lista_servicio.php");
        } else {
            echo "Error al eliminar el servicio: " . $conn->error;
            sleep(3);
            header("Location: lista_servicio.php");
        }
        exit();
    }

    

// TRABAJOS DE SERVICIOS EN VEHICULOS
    if(isset($_POST['alta_serv_veh'])){         //para registrar un nuevo trabajo
        $fecha_ingreso = $_POST['fecha_ingreso'];
        $id_servicio = $_POST['id_servicio'];
        $total = $_POST['total'];
        $id_vehiculo = $_POST['id_vehiculo'];
        $sql = "INSERT INTO entrada_servicio (fecha_ingreso, id_servicio, total, id_vehiculo) VALUES ('$fecha_ingreso', '$id_servicio', '$total', '$id_vehiculo')";
        $result = $conn->query($sql);
        if($result){
            header("Location: lista_serv_veh.php");
        } else {
            echo "Error al agregar el trabajo servicio: " . $conn->error;
            sleep(3);
            header("Location: lista_serv_veh.php");
        }
        exit();
    }

    if(isset($_POST['cambio_serv_veh'])){       //para modificar un trabajo
        $id_entrada_servicio = $_POST['id_entrada_servicio'];
        $fecha_ingreso = $_POST['fecha_ingreso'];
        $id_servicio = $_POST['id_servicio'];
        $total = $_POST['total'];
        $id_vehiculo = $_POST['id_vehiculo'];
        $sql = "UPDATE entrada_servicio SET fecha_ingreso = '$fecha_ingreso', id_servicio = '$id_servicio', total = '$total', id_vehiculo = '$id_vehiculo' WHERE id_entrada_servicio = '$id_entrada_servicio'";
        $result = $conn->query($sql);
        if($result){
            header("Location: lista_serv_veh.php");
        } else {
            echo "Error al editar el trabajo servicio: " . $conn->error;
            sleep(3);
            header("Location: lista_serv_veh.php");
        }
        exit();
    }

    if(isset($_POST['baja_serv_veh'])){         //para eliminar un trabajio
        $id_entrada_servicio = $_POST['id_entrada_servicio'];
        $sql = "DELETE FROM entrada_servicio WHERE id_entrada_servicio = ".$id_entrada_servicio;
        $result = $conn->query(($sql));
        if($result){
            header("Location: lista_serv_veh.php");
        } else {
            echo "Error al eliminar el trabajo servicio: " . $conn->error;
            sleep(3);
            header("Location: lista_serv_veh.php");
        }
        exit();
    }

?>