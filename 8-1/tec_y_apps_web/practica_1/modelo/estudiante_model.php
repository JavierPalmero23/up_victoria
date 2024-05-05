<!--modelo/estudiante_model.php-->
<?php
    
    class estudiante_model{
        private $DB;
        private $estudiantes;

        function __construct(){
            $this->DB=Database::connect();
        }

        function get(){
            $sql= 'SELECT * FROM estudiante ORDER BY id_estudiante DESC';
            $fila=$this->DB->query($sql);
            $this->estudiantes=$fila;
            return  $this->estudiantes;
        }

        function create($data){

            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO estudiante(id_estudiante,matricula,nombres,apellidos,promedio,fech_nac)VALUES (?,?,?,?,?,?)";

            $query = $this->DB->prepare($sql);
            $query->execute(array($data['id_estudiante'],$data['matricula'],$data['nombres'],$data['apellidos'],$data['promedio'],$data['fech_nac']));
            Database::disconnect();       

        }
        function get_id($id){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM estudiante where id_estudiante = ?";
            $q = $this->DB->prepare($sql);
            $q->execute(array($id));
            $data = $q->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        function update($data,$date){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE estudiante  set  matricula=?, nombres =?, apellidos=?,promedio=?, fech_nac=? WHERE id_estudiante = ? ";
            $q = $this->DB->prepare($sql);
            $q->execute(array($data['matricula'],$data['nombres'],$data['apellidos'],$data['promedio'],$data['fech_nac'], $date));
            Database::disconnect();

        }

        function delete($date){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="DELETE FROM estudiante where id_estudiante=?";
            $q=$this->DB->prepare($sql);
            $q->execute(array($date));
            Database::disconnect();
        }
    }
?>

