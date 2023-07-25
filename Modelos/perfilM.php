<?php  //Modelos/empleadosM.php
require_once "conexionBD.php";

class perfilM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'docentes';
        $this->tablaBD1 = 'estudiantes';
    }

    public function mostrarPerfilM(){
        $cBD = $this->conectarBD();

            $iduser=$_SESSION['Ingreso'];

            $query = "SELECT *
                    FROM $this->tablaBD where iddocentes =$iduser";
            $result = $cBD->query($query);
            return $result;

    }

// actualizar perfil
    public function actualizarPerfilM($datosC){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $nom = $datosC['nombre'];
        $apell = $datosC['apellido'];
        $perfi = $datosC['perfil'];
        $telf = $datosC['telefono'];
        $gen = $datosC['genero'];
        $emai = $datosC['email'];

        
        $query = "UPDATE $this->tablaBD
            SET 
            nombre='$nom', 
            apellido='$apell',      
            perfil='$perfi',
            telefono='$telf',
            genero='$gen',
            email='$emai'
            WHERE iddocentes=$iduser";
        
        $resultado = $cBD->query($query);
        return $resultado;    
    }



} 
?>