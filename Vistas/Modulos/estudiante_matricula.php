<?php
$registrarC = new procesoCursosC();
$mostrarCursos = $registrarC->mostrarCursosMatriculaC();
$mostrarCursosMatriculados = $registrarC->mostrarMatriculadosC();
$registrarC->registroCursoMatriculaC();



$mostrarC = new procesoMatriculaC();

$mostrarMatriculas = $mostrarC->mostrarMatriculasC();
?>

<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <!-- Fade In Utility -->
        <div class="col-lg-12">
            <div class="card position-relative">
                <div class="card-header py-3">               
                    <div class="d-sm-flex align-items-center justify-content-between mb-6">
                        <h6 class="m-0 font-weight-bold text-primary">Realizar Matricula</h6>   
                    </div>
                </div>
                <div class="card-body">
                    <!-- contenido del body -->
                    <div class="table-responsive">
                    <form action="" method="post" id="matriculaForm">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="bg-dark text-white">Cursos</th>
                                    <th class="bg-dark text-white">Ciclo</th>
                                    <th class="bg-dark text-white">Tipo de Curso</th>
                                    <th class="bg-dark text-white">Opcion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($mostrarCursos as $mostrarCurso): ?>
                                    <!-- Agregar condición para el ciclo 1 -->    
                                    <tr>
                                        <td><?=$mostrarCurso['asignatura']?></td>
                                        <td><?=$mostrarCurso['ciclo']?></td>
                                        <td><?=$mostrarCurso['descripcion']?></td>
                                        <td>
                                            <!-- Checkbox para seleccionar el curso -->
                                            <input type="checkbox" name="cursoSeleccionado[]" value="<?=$mostrarCurso['asignatura']?>">
                                            <i class="ms-checkbox-check"></i>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            
                        </table>
                        <button type="submit" class="btn btn-success mt-3" id="btnMatricula">Registrar Matrícula</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Deshabilitar el botón después de enviar el formulario
    const btnMatricula = document.getElementById('btnMatricula');
    const matriculaForm = document.getElementById('matriculaForm');

    matriculaForm.addEventListener('submit', function() {
        btnMatricula.disabled = true;
    });
</script>

<!-- Mostrar cursos seleccionados -->
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card position-relative">
                <div class="card-header py-3">               
                    <div class="d-sm-flex align-items-center justify-content-between mb-6">
                        <h6 class="m-0 font-weight-bold text-primary">Cursos Seleccionados</h6>   
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="bg-dark text-white">Cursos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($mostrarCursosMatriculados as $mostrarCursosMatriculado): ?>
                                    <tr>
                                        <td><?=$mostrarCursosMatriculado['cursos_matriculados']?></td>
                                    </tr>
                                <?php endforeach; ?>
                                
                            </tbody>
                        </table>
                    </div>

                    <!-- Formulario para enviar los datos -->
                    <form id="formMatricula" action="Vistas\Modulos\ficha_matricula.php" method="post" style="display: none;">
                        <?php
                        // Decodificar el JSON y convertirlo en un array
                        $cursosMatriculadosArray = json_decode($mostrarCursosMatriculado['cursos_matriculados'], true);
                        ?>
                    <input type="hidden" name="cursosmatriculados" value="<?= implode(',', $cursosMatriculadosArray) ?>">

                        <?php foreach($mostrarMatriculas as $mostrarMatricul): ?>
                            <input type="hidden" name="nombre" value="<?=$mostrarMatricul['nombre']?>">
                        <?php endforeach; ?>
                        
                        <input type="hidden" name="apellido" value="<?=$mostrarMatricul['apellido']?>">
                        <input type="hidden" name="dni" value="<?=$mostrarMatricul['dni']?>">
                        <input type="hidden" name="email" value="<?=$mostrarMatricul['email']?>">
                        <input type="hidden" name="ciclo" value="<?=$mostrarMatricul['ciclo']?>">
                        <input type="hidden" name="turno" value="<?=$mostrarMatricul['turno']?>">
                        <input type="hidden" name="añoacademico" value="<?=$mostrarMatricul['añoacademico']?>">
                        <input type="hidden" name="fechamatricula" value="<?=$mostrarMatricul['fechamatricula']?>">
                        <input type="hidden" name="codigo_estudiante" value="<?=$mostrarMatricul['codigo_estudiante']?>">
                       
                        <!-- Agrega los demás campos que desees enviar a la ficha_matricula.php -->
                    </form>
                    <!-- Botón para enviar el formulario -->
                    <button type="button" onclick="enviarFormulario()" class="btn btn-success mt-3">Imprimir Matricula</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script para enviar el formulario -->
<script>
    function enviarFormulario() {
        // Obtenemos el formulario por su ID y lo enviamos
        document.getElementById('formMatricula').submit();
    }
</script>
