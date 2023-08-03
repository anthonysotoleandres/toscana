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

        /// /MOSTRAR CURSOS para matricula
    public function mostrarCursosMatriculaM(){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $query = "SELECT * FROM $this->tablaBD JOIN estudiantes  ON cursos.ciclo = estudiantes.ciclo WHERE 
        estudiantes.idestudiantes = $iduser";

        $resultado = $cBD->query($query);
        return $resultado;

    }


    // /MOSTRAR CURSOS  matriculados
    public function mostrarMatriculadosM(){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $query = "SELECT * FROM pagos WHERE 
        estudiantesid = $iduser";

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



        //REGSITRO DE CURSOS PAARR LA MATRICULA
    public function registroCursoMatriculaM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        // Convertir el array en formato JSON
        $cursos = json_encode($datosC['cursos']);
       

        
        $query = "INSERT INTO pagos VALUES 
            (NULL,'$cursos','$iduser')";
    
        $result = $cBD->query($query);
        return $result;
    }




} 
?>