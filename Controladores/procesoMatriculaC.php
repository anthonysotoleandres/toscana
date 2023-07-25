<?php  // registrar PROCESO DE INSCRIPCION
class procesoMatriculaC {
    function __construct(){
        $this->procesoMatriculaM = new procesoMatriculaM();
    }


 // MOSTRAR ESTUDIANTES
 public function mostrarEstudiantesC(){
            if(isset($_POST['dniBU'])){
                $datosC =array();
                
                $datosC['dni'] = $_POST['dniBU'];
                $resultado = $this->procesoMatriculaM->mostrarEstudiantesM($datosC);

                return $resultado;
    }
}   


    // registrar matricula de estudiantes
    public function registroMatriculaC(){
        if(isset($_POST['matriculaRM'])){
            $datosC =array();
            $datosC['id'] = $_POST['idRM'];
            $datosC['fecha_matricula'] = $_POST['fecha_matriculaRM'];
            $datosC['ciclo'] = $_POST['cicloRM'];
            $datosC['turno'] = $_POST['turnoRM'];
            $datosC['matricula'] = $_POST['matriculaRM'];
            $datosC['mensualidad'] = $_POST['mensualidadRM'];
            $datosC['año'] = $_POST['añoRM'];
            
            
            $resultado = $this->procesoMatriculaM->registroMatriculaM($datosC);
            

        }
    }


 // MOSTRAR MATRICULAS
 public function mostrarMatriculasC(){
    $resultado = $this->procesoMatriculaM->mostrarMatriculasM();
    return $resultado;
}    
   

 // MOSTRAR ESTUDIANTES MATRICULADOS
 public function mostrarEstudiantesMatriculadosC(){
    $resultado = $this->procesoMatriculaM->mostrarEstudiantesMatriculadosM();
    return $resultado;
}   

}
?>