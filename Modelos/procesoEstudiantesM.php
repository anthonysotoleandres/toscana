<?php  //Modelos/empleadosM.php
require_once "conexionBD.php";

class procesoEstudiantesM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'estudiantes';
        
    }

    // REGISTRAR ESTUDIANTES
    public function registroEstudiantesM($datosC){
        $cBD = $this->conectarBD();

        $nombr = $datosC['nombre'];
        $apellid = $datosC['apellido'];
        $tefef = $datosC['telefono'];
        $gener = $datosC['genero'];
        $dni = $datosC['dni'];
        $emai = $datosC['email'];
        $contraseña = $datosC['dni'];
      
    

 

        $nombre = mysql_entities_fix_string($cBD,$nombr);
        $apellido = mysql_entities_fix_string($cBD,$apellid);
        $tefefono = mysql_entities_fix_string($cBD,$tefef);
        $genero = mysql_entities_fix_string($cBD,$gener);
        $dnii = mysql_entities_fix_string($cBD,$dni);
        $email = mysql_entities_fix_string($cBD,$emai);
        $pw_temp = mysql_entities_fix_string($cBD,$contraseña);
   

        $password = password_hash($pw_temp, PASSWORD_DEFAULT);
        
        $query = "INSERT INTO $this->tablaBD VALUES 
            (NULL,'$nombre','$apellido','$tefefono','$genero','$dnii','$email','$password','estudiante')";

        $resultado = $cBD->query($query);
        return $resultado;
    }


    /// /MOSTRAR ESTUDIANTES
    public function mostrarEstudiantesM(){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $query = "SELECT * FROM $this->tablaBD";

        $resultado = $cBD->query($query);
        return $resultado;

    }
 
    /// /BORRAR ESTUDIANTES   
    public function borrarEstudiantesM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];
    
        $IDE = $datosC['idestudiantes'];
    

        $query = "DELETE FROM matriculas WHERE estudiantes_idestudiantes='$IDE';
        DELETE FROM $this->tablaBD WHERE idestudiantes='$IDE'";
        $resultado = $cBD->query($query);
    
        return $resultado;
    }


} 
?>