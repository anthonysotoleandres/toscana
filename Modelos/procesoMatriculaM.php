<?php  //Modelos/empleadosM.php
require_once "conexionBD.php";

class procesoMatriculaM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'estudiantes';
        $this->tablaBD2 = 'matriculas';
        
    }


    /// /MOSTRAR Estudiants
    public function mostrarEstudiantesM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $dni = $datosC['dni'];

        $query = "SELECT * FROM $this->tablaBD WHERE dni='$dni'";

        $resultado = $cBD->query($query);
        return $resultado;

    }

    //REALIZAR MATRICULA
    public function registroMatriculaM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $id = $datosC['id'];
        $fecha_matricula = $datosC['fecha_matricula'];
        $ciclo = $datosC['ciclo'];
        $turno = $datosC['turno'];
        $matricula = $datosC['matricula'];
        $mensualidad = $datosC['mensualidad'];
        $año = $datosC['año'];
    
    
        
        $query = "INSERT INTO $this->tablaBD2 VALUES 
            (NULL,'$fecha_matricula','$año','$turno','$ciclo','$matricula','$mensualidad',$id)";
    
        $result = $cBD->query($query);
        return $result;
    }

    /// /MOSTRAR ESTUDIANTES
    public function mostrarMatriculasM(){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $query = "SELECT *
        FROM $this->tablaBD 
        JOIN $this->tablaBD2  ON idestudiantes = estudiantes_idestudiantes";

        $resultado = $cBD->query($query);
        return $resultado;

    }



        /// /MOSTRAR ESTUDIANTES MATRICULADOS
    public function mostrarEstudiantesMatriculadosM(){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $query = "SELECT *
        FROM $this->tablaBD 
        JOIN $this->tablaBD2  ON idestudiantes = estudiantes_idestudiantes";

        $resultado = $cBD->query($query);
        return $resultado;

    }


} 
?>