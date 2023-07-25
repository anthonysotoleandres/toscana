<?php  //
require_once "conexionBD.php";

class procesoCursosM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'cursos';
        
    }




    /// /MOSTRAR CURSOS
    public function mostrarCursosM(){
        $cBD = $this->conectarBD();
        $iduser=$_SESSION['Ingreso'];

        $query = "SELECT * FROM $this->tablaBD";

        $resultado = $cBD->query($query);
        return $resultado;

    }



} 
?>