
<?php
require 'vendor/autoload.php';


if (isset($_GET['idestudiante'], 
    $_GET['nombre'],
    $_GET['apellido'],
    $_GET['dni'],
    $_GET['email'],
    $_GET['ciclo'],
    $_GET['turno'],
    $_GET['añoacademico'],
    $_GET['fechamatricula'],
    $_GET['codigo_estudiante'],
    $_GET['matricula'],
    $_GET['mensualidad']
 
    )) {

    $idEstudiante = $_GET['idestudiante'];
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $dni = $_GET['dni'];
    $email = $_GET['email'];
    $ciclo = $_GET['ciclo'];
    $turno = $_GET['turno'];
    $añoacademico = $_GET['añoacademico'];
    $fechaMatricula = $_GET['fechamatricula'];
    $codigoEstudiante = $_GET['codigo_estudiante'];
    $matricula = $_GET['matricula'];
    $mensualidad = $_GET['mensualidad'];
    

    // Aquí deberías incluir otros archivos o funciones para obtener los datos de matrícula del estudiante
    // por ejemplo, podrías tener una función que obtenga los datos del estudiante a partir de su ID
    // Ruta de la imagen que quieres convertir a Base64
    $imagenPath = 'C:\xampp\htdocs\Toscana\Vistas\img\toscana-removebg-preview.png';

    // Obtener el contenido binario de la imagen
    $imagenBinaria = file_get_contents($imagenPath);

    // Convertir la imagen a su representación en Base64
    $imagenBase64 = base64_encode($imagenBinaria);
    // Obtener los datos del estudiante (reemplaza esto con tu lógica para obtener los datos del estudiante)
// Asegúrate de tener el código del estudiante

    // Crear el contenido HTML de la boleta de matrícula
    $html = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Boleta de Matrícula</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            .header {
                text-align: center;
                margin-bottom: 20px;
            }
            .header img {
                float: left;
                width: 100px; /* Tamaño del logo */
             
            }
        

            .title {
                font-size: 24px;
                font-weight: bold;
                margin: 0; /* Eliminamos el margen inferior del título */
                
            }
            .title.first {
            margin-right: 100px; /* Ajustamos el margen izquierdo del primer título */
        }
            

            .info {
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
                margin-bottom: 50px;
            }

            .info p {
                margin: 0;
                padding: 5px;
              
            }

            .footer {
                text-align: center;
                margin-top: 30px;
            }

            .footer p {
                font-size: 14px;
                color: #777;
            }

            /* Estilos para la tabla */
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            th, td {
                border: 1px solid #ccc;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <!-- Colocar aquí la etiqueta <img> para mostrar la imagen -->
                <img src="data:image/png;base64,' . $imagenBase64 . '">
               
                <div class="title first">Escuela de Alta Cocina</div>
                <div class="title">La Toscana</div>
                <p><i>El mejor Ingrediente para Alcanzar el Éxito</i></p>
            </div>
           <br></br>
           <br></br>
           <br></br>
            <div class="header">
                <h2>Factura de Matricula</h2>
            </div>

            <div class="info">
                <p><strong>Nombre del estudiante:</strong> ' . $nombre . '</p>
                <p><strong>Apellido del estudiante:</strong> ' . $apellido . '</p>
                <p><strong>Documento de Identidad:</strong> ' . $dni . '</p>
                <p><strong>Correo Electronico del Estudiante:</strong> ' . $email . '</p>
                <p><strong>Ciclo:</strong> ' . $ciclo . '</p>
                <p><strong>Turno:</strong> ' . $turno . '</p>
                <p><strong>Año Academico:</strong> ' . $añoacademico . '</p>
                <p><strong>Fecha de Matrícula:</strong> ' . $fechaMatricula . '</p>
             
                <p><strong>Código del estudiante:</strong> ' . $codigoEstudiante . '</p>
            </div>
            <br></br>
            <br></br>
           
            <table>
                <tr>
                    <th>Descripción</th>
                    <th>Costo de Mensualidad</th>
                    <th>Costo de Matrícula</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>Boleta de Matricula</td>
                    <td>S/.' . $mensualidad . '</td>
                    <td>S/.' . $matricula . '</td>
                    <td>S/.' . ($mensualidad + $matricula) . '</td>
                </tr>
            </table>

           

            <div class="footer">
               
            </div>
        </div>
    </body>
    </html>

    ';

    // Instanciar un nuevo objeto de Dompdf
    $dompdf = new Dompdf\Dompdf();

    // Cargar el contenido HTML en Dompdf
    $dompdf->loadHtml($html);

    // (Opcional) Personalizar las opciones de Dompdf aut
    $dompdf->setPaper('A4', 'portrait'); // Configurar el tamaño del papel y la orientación (portrait o landscape)

    // Renderizar el PDF
    $dompdf->render();

    // (Opcional) Si deseas guardar el PDF en el servidor, descomenta las siguientes líneas y asegúrate de tener los permisos de escritura en la carpeta
    //$output = $dompdf->output();
    //file_put_contents('ruta/donde/guardar/el/pdf/boleta_matricula.pdf', $output);

    // (Obligatorio) Enviar el PDF al navegador para que el usuario pueda descargarlo
    $dompdf->stream("boleta_matricula.pdf", array("Attachment" => false));

    // Nota: Si estás utilizando un framework específico, puede que necesites ajustar la forma en que envías el PDF al navegador o cómo lo guardas en el servidor. Asegúrate de consultar la documentación de tu framework si estás utilizando uno.

} else {
    // Si no se proporciona un ID de estudiante válido, puedes mostrar un mensaje de error o redirigir a otra página.
    // Por ejemplo:
    // header("Location: error.php");
    exit;
}
