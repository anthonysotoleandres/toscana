<?php  // 
class procesoCursosC {
    function __construct(){
        $this->procesoCursosM = new procesoCursosM();
    }

 // MOSTRAR Cursos
 public function mostrarCursosC(){
    $resultado = $this->procesoCursosM->mostrarCursosM();
    return $resultado;
}  
 // MOSTRAR Cursos para matricula
 public function mostrarCursosMatriculaC(){
    $resultado = $this->procesoCursosM->mostrarCursosMatriculaM();
    return $resultado;
}   

 // MOSTRAR Cursos matriculados//
 public function mostrarMatriculadosC(){
    $resultado = $this->procesoCursosM->mostrarMatriculadosM();
    ///
    return $resultado;
} 

    // registrar CURSOS
    public function registroCursosC(){
        if(isset($_POST['asignaturaRC'])){
            $datosC =array();
            $datosC['asignatura'] = $_POST['asignaturaRC'];
            $datosC['descripcion'] = $_POST['descripcionRC'];
            $datosC['requisito'] = $_POST['requisitoRC'];
            $datosC['docente'] = $_POST['docenteRC'];
            $datosC['ciclo'] = $_POST['cicloRC'];
           
            
            
            $resultado = $this->procesoCursosM->registroCursosM($datosC);
            

        }
    }


// Registrar cursos para los estudiantes
public function registroCursoMatriculaC() {
    if (isset($_POST['cursoSeleccionado'])) {
        $datosC = array();
        $datosC['cursos'] = $_POST['cursoSeleccionado'];

        // Aquí puedes hacer cualquier otra operación que necesites antes de enviar los datos al modelo

        $resultado = $this->procesoCursosM->registroCursoMatriculaM($datosC);

        // Puedes realizar alguna acción adicional o redirigir a otra página después de procesar los datos
        // Por ejemplo, redirigir a una página de confirmación o mostrar un mensaje de éxito.
        header("location: index.php?ruta=estudiante_matricula");
        exit();
    }
}

    

}
?>