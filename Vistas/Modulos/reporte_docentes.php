<?php
$mostrarC = new procesoDocentesC();

$mostrarDocentes = $mostrarC->mostrarDocentesC();
?>



<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <!-- Fade In Utility -->
        <div class="col-lg-12">
            <div class="card position-relative">
                <div class="card-header py-3">               
                    <div class="d-sm-flex align-items-center justify-content-between mb-6">
                        <h6 class="m-0 font-weight-bold text-primary">Docentes de la Toscana</h6>   
                    </div>
                </div>
                <div class="card-body">
                    <!-- contenido del body -->
                    <div class="table-responsive">
                    <caption>Docentes</caption>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="bg-dark text-white">Nombre</th>
                                    <th class="bg-dark text-white">Apellido</th>
                                    <th class="bg-dark text-white">DNI</th>
                                    <th class="bg-dark text-white">Telefono</th>
                                    <th class="bg-dark text-white">Genero</th>
                                    <th class="bg-dark text-white">Email</th>
                                    <th class="bg-dark text-white">Opciones</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                            <?php foreach($mostrarDocentes as $mostrarDocente): ?>
                                <?php if ($mostrarDocente['perfil'] == 'docente'): ?> <!-- Agregar condición para el ciclo 1 -->    
                                    <tr>
                                                    
                                        <td><?=$mostrarDocente['nombre']?></td>
                                        <td><?=$mostrarDocente['apellido']?></td>
                                        <td><?=$mostrarDocente['dni']?></td>
                                        <td><?=$mostrarDocente['telefono']?></td>
                                        <td><?=$mostrarDocente['genero']?></td>
                                        <td><?=$mostrarDocente['email']?></td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-circle">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-circle">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                            
                                                    
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
