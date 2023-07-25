<?php  // Controladores/empleadosC.php
class perfilC {
    function __construct(){
        $this->perfilM = new perfilM();
    }
    //mostrar perfil de usuario
    public function mostrarPerfilC(){
        $resultado = $this->perfilM->mostrarPerfilM();
        return $resultado;
        

    }

    //actualizar perfil 
    public function actualizarPerfilC(){
        if(isset($_POST['nombreAP'])){
            $datosC = array();  
            $datosC['nombre']= $_POST['nombreAP'];
            $datosC['apellido']= $_POST['apellidoAP'];           
            $datosC['perfil']= $_POST['perfilAP'];
            $datosC['telefono']= $_POST['telefonoAP']; 
            $datosC['genero']= $_POST['generoAP'];
            $datosC['email']= $_POST['emailAP'];
                        
            $resultado = $this->perfilM->actualizarPerfilM($datosC);
            return $resultado;
            
        }
    }


}
?>