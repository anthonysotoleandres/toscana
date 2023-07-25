<?php  
require_once "conexionBD.php";

class procesoDocentesM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'docentes';
        
    }

    // REGISTRAR DOCENTES
    public function registroDocentesM($datosC){
        $cBD = $this->conectarBD();

        $nombr = $datosC['nombre'];
        $apellid = $datosC['apellido'];
        $dni = $datosC['dni'];
        $contraseña = $datosC['dni'];
        $tefef = $datosC['telefono'];
        $gener = $datosC['genero'];
        $emai = $datosC['email'];

      
    

 

        $nombre = mysql_entities_fix_string($cBD,$nombr);
        $apellido = mysql_entities_fix_string($cBD,$apellid);
        $dnii = mysql_entities_fix_string($cBD,$dni);
        $pw_temp = mysql_entities_fix_string($cBD,$contraseña);
        $tefefono = mysql_entities_fix_string($cBD,$tefef);
        $genero = mysql_entities_fix_string($cBD,$gener);
        $email = mysql_entities_fix_string($cBD,$emai);

   

        $password = password_hash($pw_temp, PASSWORD_DEFAULT);
        
        $query = "INSERT INTO $this->tablaBD VALUES 
            (NULL,'$nombre','$apellido','$dnii','$password','docente','$tefefono','$genero','$email')";

        $resultado = $cBD->query($query);
        return $resultado;
    }


    /// /MOSTRAR ESTUDIANTES
    public function mostrarDocentesM(){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $query = "SELECT * FROM $this->tablaBD";

        $resultado = $cBD->query($query);
        return $resultado;

    }
////////////////////////////////////////////////////////////////////

/// /Contar Docentes
public function contarDocentesM(){
    $cBD = $this->conectarBD();
    
            $query = "SELECT COUNT(*) as numero FROM  docentes where perfil='docente'";
            $result = $cBD->query($query);
            return $result;

}


/// /Contar Estudiantes
public function contarEstudiantesM(){
    $cBD = $this->conectarBD();
    
            $query = "SELECT COUNT(*) as numero FROM  estudiantes";
            $result = $cBD->query($query);
            return $result;

}


/// /Contar Matriculas
public function contarMatriculasM(){
    $cBD = $this->conectarBD();
    
            $query = "SELECT COUNT(*) as numero FROM  matriculas";
            $result = $cBD->query($query);
            return $result;

}

/// /Contar Matriculas
public function contarAdministradoresM(){
    $cBD = $this->conectarBD();
    
            $query = "SELECT COUNT(*) as numero FROM  docentes where perfil='administrador'";
            $result = $cBD->query($query);
            return $result;

}


} 
?>