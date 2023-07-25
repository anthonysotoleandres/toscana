<?php //index.php
require_once 'Controladores/rutasC.php';
require_once 'Controladores/adminC.php';

require_once 'Controladores/procesoEstudiantesC.php';
require_once 'Controladores/procesoMatriculaC.php';
require_once 'Controladores/procesoCursosC.php';
require_once 'Controladores/procesoDocentesC.php';
require_once 'Controladores/perfilC.php';




require_once 'Modelos\rutasM.php';
require_once 'Modelos\adminM.php';

require_once 'Modelos\procesoEstudiantesM.php';
require_once 'Modelos\procesoMatriculaM.php';
require_once 'Modelos\procesoCursosM.php';
require_once 'Modelos\procesoDocentesM.php';
require_once 'Modelos\perfilM.php';


include 'Vistas/plantilla.php';


?>