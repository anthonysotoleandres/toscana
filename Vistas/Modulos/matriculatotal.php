<?php
$registrarC = new procesoMatriculaC();

$mostrarMatriculas = $registrarC->mostrarMatriculasC();
$mostrarDatos = $registrarC->mostrarMatriculasC();


$registrarC->borrarMatriculaC();
$registrarC->modificarMatriculaC();
?>





<div class="container-fluid">


    <!-- Content Row -->
    <div class="row">

        

        <!-- Fade In Utility -->
        <div class="col-lg-12">

            <div class="card position-relative">
                
                <div class="card-header py-3">               
                    <div class="d-sm-flex align-items-center justify-content-between mb-6">
                    <h6 class="m-0 font-weight-bold text-primary">Matriculas</h6>   
                            <a href="index.php?ruta=matriculaestudiantes" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm " style="float: left;" >                         
                                <i class="fas fa-solid fa-plus fa-sm "></i>
                                </i> Realizar Matricula</a>
                                
                                

                                    
                        </div>
                        
                </div>
                
                <div class="card-body">
                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Apellido</th>
                                                <th class="text-center">Ciclo</th>
                                                <th class="text-center">Turno</th>
                                                <th class="text-center">Fecha de Matricula</th>
                                                <th class="text-center">Opciones</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php foreach($mostrarMatriculas as $mostrarMatricul):?>
                                                
                                                <tr>
                                                    
                                                    <td class="text-center"><?=$mostrarMatricul['nombre']?></td>
                                                    <td class="text-center"><?=$mostrarMatricul['apellido']?></td>
                                                    <td class="text-center"><?=$mostrarMatricul['ciclo']?></td>
                                                    <td class="text-center"><?=$mostrarMatricul['turno']?></td>
                                                    <td class="text-center"><?=$mostrarMatricul['fechamatricula']?></td>
                                                    
                                                    <td class="text-center">
                                                        <!-- Enlace para modificar MATRICULA -->
                                                        <a href="#modificarMatriculaModal<?=$mostrarMatricul['idmatriculas']?>" class="btn btn-info btn-circle" data-toggle="modal">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                            <!-- Ventana emergente para modificar matricula -->
                                                            <div class="modal fade" id="modificarMatriculaModal<?=$mostrarMatricul['idmatriculas']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Modificar Matricula</h5>
                                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form method="post" class="user">

                                                                                <div class="form-group row">
                                                                                    <label for="nombre" class="col-sm-2 col-form-label font-weight-bold">Nombre:</label>
                                                                                    <div class="col-sm-10">
                                                                                    
                                                                                    <?php foreach($mostrarDatos as $mostrarDato):?> 
                                                                                        <?php if ($mostrarDato['idmatriculas'] == $mostrarMatricul['idmatriculas']): ?>
                                                                                        <input type="text" value="<?=$mostrarDato['idmatriculas']?>" class="form-control" id="nombre" placeholder="Nombre" name="nombreMM" readonly>
                                                                                        <?php endif; ?>
                                                                                    <?php endforeach; ?>  
                                                                                    
                                                                                    </div>
                                                                                </div>


                                                                                <div class="form-group row">
                                                                                    <label for="apellido" class="col-sm-2 col-form-label font-weight-bold">Apellido:</label>
                                                                                    <div class="col-sm-10">
                                                                                    <?php foreach($mostrarDatos as $mostrarDato):?> 
                                                                                        <?php if ($mostrarDato['idmatriculas'] == $mostrarMatricul['idmatriculas']): ?>
                                                                                        <input type="text"  value="<?=$mostrarDato['apellido']?>" class="form-control" id="apellido" placeholder="Apellido" name="apellidoMM" readonly>
                                                                                        <?php endif; ?>
                                                                                    <?php endforeach; ?>  
                                                                                    </div>
                                                                                </div>


                                                                                <div class="form-group row">
                                                                                    <label for="dni" class="col-sm-2 col-form-label font-weight-bold">DNI:</label>
                                                                                    <div class="col-sm-10">
                                                                                    <?php foreach($mostrarDatos as $mostrarDato):?> 
                                                                                        <?php if ($mostrarDato['idmatriculas'] == $mostrarMatricul['idmatriculas']): ?>
                                                                                        <input type="number" value="<?=$mostrarDato['dni']?>" class="form-control" id="dni" placeholder="DNI" name="dniMM" readonly>
                                                                                        <?php endif; ?>
                                                                                    <?php endforeach; ?>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="form-group row">
                                                                                    <label for="genero" class="col-sm-2 col-form-label font-weight-bold">Matricula:</label>
                                                                                    <div class="col-sm-10">
                                                                                    <?php foreach($mostrarDatos as $mostrarDato):?> 
                                                                                        <?php if ($mostrarDato['idmatriculas'] == $mostrarMatricul['idmatriculas']): ?>
                                                                                        <input type="number" value="<?=$mostrarDato['matricula']?>" class="form-control" id="genero" placeholder="Genero" name="matriculaMM" >
                                                                                        <?php endif; ?>
                                                                                    <?php endforeach; ?>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="form-group row">
                                                                                    <label for="telefono" class="col-sm-2 col-form-label font-weight-bold">Mensualidad:</label>
                                                                                    <div class="col-sm-10">
                                                                                    <?php foreach($mostrarDatos as $mostrarDato):?> 
                                                                                        <?php if ($mostrarDato['idmatriculas'] == $mostrarMatricul['idmatriculas']): ?>
                                                                                        <input type="number" value="<?=$mostrarDato['mensualidad']?>" class="form-control" id="telefono" placeholder="Teléfono" name="mensualidadMM">
                                                                                        <?php endif; ?>
                                                                                    <?php endforeach; ?>
                                                                                    </div>
                                                                                </div>


                                                                                

                                                                                <!-- Campo oculto para enviar el valor de idestudiantes -->
                                                                                <input type="hidden" name="idmatriculasMM" value="<?=$mostrarMatricul['idmatriculas']?>">
                                                                                <div class="modal-footer">
                                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                                                    <button class="btn btn-primary" type="submit">Modificar</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        <!-- Enlace para eliminar matricula -->
                                                        <a href="#eliminarMatriculaModal<?=$mostrarMatricul['idmatriculas']?>" class="btn btn-danger btn-circle" data-toggle="modal">
                                                                <i class="fas fa-trash"></i>
                                                        </a>
                                                        <!-- Ventana emergente de confirmación -->
                                                        <div class="modal fade" id="eliminarMatriculaModal<?=$mostrarMatricul['idmatriculas']?>" tabindex="-1" role="dialog" aria-labelledby="eliminarMatriculaModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="eliminarMatriculaModalLabel">Confirmación</h5>
                                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">×</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ¿Estás seguro de Eliminar la Matricula?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                                                <a href="index.php?ruta=matriculatotal&idMATRICULA=<?=$mostrarMatricul['idmatriculas']?>" class="btn btn-primary">Eliminar</a>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <!-- GENERAR BOLETA DE MATRICULA -->
                                                        <a href="Vistas/Modulos/boleta_matricula.php?idestudiante=<?=$mostrarMatricul['idestudiantes']?>
                                                        &nombre=<?=$mostrarMatricul['nombre']?>
                                                        &apellido=<?=$mostrarMatricul['apellido']?>
                                                        &dni=<?=$mostrarMatricul['dni']?>
                                                        &email=<?=$mostrarMatricul['email']?>
                                                        &ciclo=<?=$mostrarMatricul['ciclo']?>
                                                        &turno=<?=$mostrarMatricul['turno']?>
                                                        &añoacademico=<?=$mostrarMatricul['añoacademico']?>
                                                        &fechamatricula=<?=$mostrarMatricul['fechamatricula']?>
                                                        &codigo_estudiante=<?=$mostrarMatricul['codigo_estudiante']?>
                                                        &matricula=<?=$mostrarMatricul['matricula']?>
                                                        &mensualidad=<?=$mostrarMatricul['mensualidad']?>
                                                        
                                                        
                                                        
                                                        
                                                        "    
                                                        class="btn btn-success btn-circle" target="_blank">
                                                            <i class="fas fa-download"></i>
                                                        </a>

                                          
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


