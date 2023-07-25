<?php
$mostrarC = new procesoDocentesC();
$mostrarDocentes = $mostrarC->mostrarDocentesC();

$docentes= $mostrarC->contarDocentesC();
$estudiantes= $mostrarC->contarEstudiantesC();
$matriculas= $mostrarC->contarMatriculasC();
$administradores= $mostrarC->contarAdministradoresC();

?>




<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Estudiantes Registrados</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php foreach($estudiantes as $estudiante): ?> 
                                    <p><?=$estudiante['numero']?></p>                       
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Matriculas Realizadas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php foreach($matriculas as $matricula): ?> 
                                    <p><?=$matricula['numero']?></p>                       
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tasks Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total de Docentes</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                    <?php foreach($docentes as $docente): ?> 
                                    <p><?=$docente['numero']?></p>                       
                                    <?php endforeach; ?> 
                                    </div>
                                </div>
                                <div class="col">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Administradores</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php foreach($administradores as $administradore): ?> 
                                    <p><?=$administradore['numero']?></p>                       
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ADMIS -->
        <div class="col-lg-12">
            <div class="card position-relative">
                <div class="card-header py-3">               
                    <div class="d-sm-flex align-items-center justify-content-between mb-6">
                        <h6 class="m-0 font-weight-bold text-primary">Administradores</h6>   
                    </div>
                </div>
                <div class="card-body">
                    <!-- contenido del body -->
                    <div class="table-responsive">
                    
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="bg-gradient-warning text-white">Nombre</th>
                                    <th class="bg-gradient-warning text-white">Apellido</th>
                                    <th class="bg-gradient-warning text-white">DNI</th>
                                    <th class="bg-gradient-warning text-white">Telefono</th>
                                    <th class="bg-gradient-warning text-white">Genero</th>
                                    <th class="bg-gradient-warning text-white">Email</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                            <?php foreach($mostrarDocentes as $mostrarDocente): ?>
                                <?php if ($mostrarDocente['perfil'] == 'administrador'): ?> <!-- Agregar condición para el ciclo 1 -->    
                                    <tr>
                                                    
                                        <td><?=$mostrarDocente['nombre']?></td>
                                        <td><?=$mostrarDocente['apellido']?></td>
                                        <td><?=$mostrarDocente['dni']?></td>
                                        <td><?=$mostrarDocente['telefono']?></td>
                                        <td><?=$mostrarDocente['genero']?></td>
                                        <td><?=$mostrarDocente['email']?></td>
                                            
                                                    
                                    </tr>
                                    <?php endif; ?>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
