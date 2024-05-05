<?php
class carrera_model{
    private $DB;
    private $carreras;

    function __construct(){
        $this->DB=Database::connect();
    }

    function get(){
        $sql= 'SELECT * FROM carrera ORDER BY id_carrera DESC';
        $fila=$this->DB->query($sql);
        $this->carreras=$fila;
        return  $this->carreras;
    }

    function create($data){
        $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="INSERT INTO carrera(nombre, acronimo) VALUES (?, ?)";
        $query = $this->DB->prepare($sql);
        $query->execute(array($data['nombre'], $data['acronimo']));
        Database::disconnect();
    }

    function get_id($id){
        $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM carrera WHERE id_carrera = ?";
        $q = $this->DB->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    function update($data, $id){
        $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE carrera SET nombre = ?, acronimo = ? WHERE id_carrera = ?";
        $q = $this->DB->prepare($sql);
        $q->execute(array($data['nombre'], $data['acronimo'], $id));
        Database::disconnect();
    }

    function delete($id){
        $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="DELETE FROM carrera WHERE id_carrera = ?";
        $q=$this->DB->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
    }
}
?>
