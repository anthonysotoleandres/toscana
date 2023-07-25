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
    

}
?>