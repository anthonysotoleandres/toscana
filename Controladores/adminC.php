<?php  //Controladores/adminC.php
class AdminC{
    function __construct(){
        $this->adminM = new AdminM();
    }

    public function IngresoC(){
        if(isset($_SESSION['Ingreso']))
            header("location: index.php?ruta=dashboard");
        if(isset($_POST["usuarioI"])){
            $datosC = array(   
                            "usuario"=>$_POST["usuarioI"], 
                            "contraseña"=>$_POST["claveI"],
                            "perfil"=>$_POST["perfilI"]);
            //$tablaBD = "usuarios";
            $resultado = $this->adminM->IngresoM($datosC);
            //$rows = $pagina->fetch_array(MYSQLI_ASSOC);
            if ($resultado){
                session_start(); 
                $_SESSION['Ingreso']=$resultado;
                header("location: index.php?ruta=dashboard");
            }
            else
            {
                return false;
            }
        }
        return true;
    }

    public function salirC(){
        ob_start();
        session_destroy();
        header('location:index.php?ruta=ingreso');
        exit();
        ob_end_flush();
    }

    public function sesionIniciadaC(){
        session_start();
        if(isset($_SESSION['Ingreso']))
            return true;
        return false;
    }

    public function redirigirSesionC($ruta){
        if(!$_SESSION["Ingreso"]){
            header("location:index.php?=$ruta");
            exit();
        }
    }
}
?>