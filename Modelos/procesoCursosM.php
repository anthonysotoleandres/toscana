<?php  //
require_once "conexionBD.php";

class procesoCursosM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'cursos';
        
    }




    /// /MOSTRAR CURSOS
    public function mostrarCursosM(){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $query = "SELECT * FROM $this->tablaBD";

        $resultado = $cBD->query($query);
        return $resultado;

    }

    //REGSITRO DE CURSOS
    public function registroCursosM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $asignatura = $datosC['asignatura'];
        $descripcion = $datosC['descripcion'];
        $requisito = $datosC['requisito'];
        $docente = $datosC['docente'];
        $ciclo = $datosC['ciclo'];
      
    
    
        
        $query = "INSERT INTO $this->tablaBD VALUES 
            (NULL,'$ciclo','$asignatura','$descripcion','$requisito','$docente')";
    
        $result = $cBD->query($query);
        return $result;
    }




} 
?>