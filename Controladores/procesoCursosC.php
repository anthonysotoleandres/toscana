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
    

}
?>