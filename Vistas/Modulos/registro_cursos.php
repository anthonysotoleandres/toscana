
<?php
$registrarC = new procesoCursosC();
$registrarC->registroCursosC();
$mostrarCursos = $registrarC->mostrarCursosC();

$mostrarC = new procesoDocentesC();
$mostrarDocentes = $mostrarC->mostrarDocentesC();
$mostrarAsignaturas = $mostrarC->mostrarAsignaturasC();

$mostrarC->borrarAsignaturaC();

?>




<div class="container-fluid">


    <!-- Content Row -->
    <div class="row">

        

        <!-- Fade In Utility -->
        <div class="col-lg-12">

            <div class="card position-relative">
                <div class="card-header py-3">               
                    <div class="d-sm-flex align-items-center justify-content-between mb-6">
                    <h6 class="m-0 font-weight-bold text-primary">Registro de Cursos o Asiganturas</h6>   
                            
                        </div>
                </div>
                
                <div class="card-body">
                    <!-- contenido del body -->
                    <form method="post" class="user">       
                                <div class="form-row align-items-center">
                                    <div class="form-group col-sm-4">
                                        <label for="asignatura" class="font-weight-bold">Asignatura</label>
                                        <input type="text" class="form-control" id="asignatura" placeholder="Curso" name="asignaturaRC">
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="matricula" class="font-weight-bold">Descripción del Curso</label>
                                        <select class="form-control" id="genero" name="descripcionRC">
                                            <option value="">Seleccionar</option>
                                            <option value="Curso Teórico">Curso Teórico</option>
                                            <option value="Curso Practico">Curso Practico</option>
                                        
                                        </select>
                                    </div>
                                    

                            
                                    <div class="form-group col-sm-4">
                                        <label for="matricula" class="font-weight-bold">Pre Requisitos</label>
                                            <select class="form-control" id="genero" name="requisitoRC">
                                            <option value="Ninguno">Ninguno</option>
                                            <?php foreach ($mostrarCursos as $mostrarCurso): ?>
                                                <option value="<?= $mostrarCurso['asignatura'] ?>">
                                                    <span><?= $mostrarCurso['asignatura'] ?></span>
                                                    <span> --- </span>
                                                    <span>Ciclo-</span>
                                                    <span><?= $mostrarCurso['ciclo'] ?></span>
                                                </option>
                                            <?php endforeach; ?>

                                            </select>

                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="matricula" class="font-weight-bold">Ciclo</label>
                                        <select class="form-control" id="genero" name="cicloRC">
                                            <option value="">Seleccionar</option>
                                            <option value="1">I</option>
                                            <option value="2">II</option>
                                            <option value="3">III</option>
                                            <option value="4">IV</option>   
                                            <option value="5">V</option>
                                            <option value="6">VI</option>
                                        
                                        </select>
                                    </div>
                                    
                                    <!-- Agrega más grupos de campos si es necesario -->
                                    
                                    <div class="form-group col-sm-4">
                                        <label for="matricula" class="font-weight-bold">Docente Asignado</label>
                                        <select class="form-control" id="genero" name="docenteRC">
                                            <?php foreach ($mostrarDocentes as $mostrarDocente): ?>
                                                <?php if ($mostrarDocente['iddocentes'] != 1): ?>
                                                    <option value="<?= $mostrarDocente['iddocentes'] ?>">
                                                        <span><?= $mostrarDocente['nombre'] ?></span>
                                                    </option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        
                                        </select>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group col-sm-12 text-center">
                                        <button class="btn btn-primary" type="submit">Registrar Nuevo Curso</button>
                                    </div>
                                    

                                </div>

                    </form>
            </div>

        </div>

    </div>

</div>

<br></br>

<div class="">


    <!-- Content Row -->
    <div class="row">

        

        <!-- Fade In Utility -->
        <div class="col-lg-12">

            <div class="card position-relative">
                
                <div class="card-header py-3">               
                    <div class="d-sm-flex align-items-center justify-content-between mb-6">
                    <h6 class="m-0 font-weight-bold text-primary">Asignaturas por Docentes</h6>   
                                                               
                        </div>
                        
                </div>
                
                <div class="card-body">
                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Asignatura</th>
                                                <th class="text-center">Docente</th>
                                                <th class="text-center">Opciones</th>
                                              
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php foreach($mostrarAsignaturas as $mostrarAsignatura): ?>
                                         
                                                    <tr>
                                                       
                                                        <td class="text-center"><?=$mostrarAsignatura['asignatura']?></td>
                                                        <td class="text-center"><?=$mostrarAsignatura['nombre']?> <?=$mostrarAsignatura['apellido']?></td>
                                                        <td class="text-center">
                                                            <!-- Enlace para eliminar ASIGNATURA -->
                                                            <a href="#eliminarMatriculaModal<?=$mostrarAsignatura['idcursos']?>" class="btn btn-danger btn-circle" data-toggle="modal">
                                                                    <i class="fas fa-trash"></i>
                                                            </a>
                                                             <!-- Ventana emergente de confirmación -->
                                                            <div class="modal fade" id="eliminarMatriculaModal<?=$mostrarAsignatura['idcursos']?>" tabindex="-1" role="dialog" aria-labelledby="eliminarMatriculaModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="eliminarMatriculaModalLabel">Confirmación</h5>
                                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">×</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ¿Estás seguro de Eliminar la Asignatura?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                                                <a href="index.php?ruta=registro_cursos&idCURSOS=<?=$mostrarAsignatura['idcursos']?>" class="btn btn-primary">Eliminar</a>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        
                                                        
                                                    </tr>
                                                
                                            <?php endforeach; ?>
                                            

                                        </tbody>
                                    </table>
                                </div>




                </div>
            </div>

        </div>

    </div>

</div>


