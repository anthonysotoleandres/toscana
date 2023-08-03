<?php //  Modelos/rutasM.php
class RutasM{
    public function procesaRutasM($ruta){
        if( $ruta == "ingreso" || 
            $ruta == 'dashboard' ||
            $ruta == 'salir' ||
            $ruta == 'registroestudiantes' ||
            $ruta == 'matriculaestudiantes' ||
            $ruta == 'matriculatotal' ||
            $ruta == 'reporte_matricula' ||
            $ruta == 'plan_estudio' ||
            $ruta == 'horario' ||
            $ruta == 'reporte_estudiantes' ||
            $ruta == 'registro_docentes' ||
            $ruta == 'reporte_docentes' ||
            $ruta == 'registro_cursos' ||
            $ruta == 'boleta_matricula' ||
            $ruta == 'estudiante_matricula' ||
            $ruta == 'ficha_matricula' ||
            $ruta == 'perfil_estudiantes' ||

            $ruta == 'perfil')
        {
            $pagina = "Vistas/Modulos/".$ruta. ".php";
        }
        else if($ruta == 'index'){
            $pagina = "Vistas/Modulos/ingreso.php";
        }
        else {
            $pagina = "Vistas/Modulos/ingreso.php";
        }
        return $pagina;
    }

}
?>