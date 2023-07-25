<?php  // registrar PROCESO DE INSCRIPCION
class procesoEstudiantesC {
    function __construct(){
        $this->procesoEstudiantesM = new procesoEstudiantesM();
    }
    // registrar proceso Inscripcion
        public function registroEstudiantesC(){
            if(isset($_POST['dniRE'])){
                $datosC =array();
                $datosC['nombre'] = $_POST['nombreRE'];
                $datosC['apellido'] = $_POST['apellidoRE'];
                $datosC['telefono'] = $_POST['telefonoRE'];
                $datosC['genero'] = $_POST['generoRE'];
                $datosC['dni'] = $_POST['dniRE'];
                $datosC['email'] = $_POST['emailRE'];
                $datosC['contraseña'] = $_POST['dniRE'];
                
                
                $resultado = $this->procesoEstudiantesM->registroEstudiantesM($datosC);
                
    
            }
        }

 // MOSTRAR ESTUDIANTES
 public function mostrarEstudiantesC(){
    $resultado = $this->procesoEstudiantesM->mostrarEstudiantesM();
    return $resultado;
}


 // ELIMINAR ESTUDIANTES
 public function borrarEstudiantesC(){
    if(isset($_GET['idESTU'])){
        $datosC = array();
        $datosC['idestudiantes'] = $_GET['idESTU'];
        $resultado=$this->procesoEstudiantesM->borrarEstudiantesM($datosC);
      
        
    }
}
    

}
?>