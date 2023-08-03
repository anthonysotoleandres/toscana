<?php  // registrar PROCESO DE INSCRIPCION
class procesoMatriculaC {
    function __construct(){
        $this->procesoMatriculaM = new procesoMatriculaM();
    }


 // MOSTRAR ESTUDIANTES
public function mostrarEstudiantesC() {
    if (isset($_POST['dniBU'])) {
        $datosC = array();
        $datosC['dni'] = $_POST['dniBU'];

        $resultado = $this->procesoMatriculaM->mostrarEstudiantesM($datosC);

        return $resultado;
    } else {
        return null;
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
            $datosC['codigo_estudiante'] = $_POST['codigo_estudianteRM'];

            $resultado = $this->procesoMatriculaM->registroMatriculaM($datosC);
            /// registrar codigo
            // Si el ciclo es igual a "Ciclo-I", registra el código
            if ($datosC['ciclo'] === 'Ciclo-I') {
                $resultado2 = $this->procesoMatriculaM->registrarCodigoM($datosC);
            }

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

 // MOSTRAR MATRICULAS 2
 public function mostrarMatriculas2C(){
    if (isset($_POST['dniBU'])) {
        $datosC = array();
        $datosC['dni'] = $_POST['dniBU'];

        $resultado = $this->procesoMatriculaM->mostrarMatriculas2M($datosC);
        
        return $resultado;
    } else {
        return null;
    }
}    


 // BORRAR MATRICULA
 public function borrarMatriculaC(){
    if(isset($_GET['idMATRICULA'])){
        $datosC = array();
        $datosC['idmatriculas'] = $_GET['idMATRICULA'];
        $resultado=$this->procesoMatriculaM->borrarMatriculaM($datosC);
        header("location: index.php?ruta=matriculatotal");
        exit();
        
    }
}

// MODIFICAR MATRICULA

public function modificarMatriculaC(){
    if(isset($_POST['idmatriculasMM'])){
        $datosC = array();  
        
        $datosC['idmatriculas']= $_POST['idmatriculasMM'];
        $datosC['matricula']= $_POST['matriculaMM']; 
        $datosC['mensualidad']= $_POST['mensualidadMM'];
      
        $resultado = $this->procesoMatriculaM->modificarMatriculaM($datosC);
        header("location: index.php?ruta=matriculatotal");
        exit();
        return $resultado;
        
    }
}





}
?>