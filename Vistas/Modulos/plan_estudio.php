
<?php
$mostrarC = new procesoCursosC();

$mostrarCursos = $mostrarC->mostrarCursosC();
?>




<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <!-- Fade In Utility -->
        <div class="col-lg-12">
            <div class="card position-relative">
                <div class="card-header py-3">               
                    <div class="d-sm-flex align-items-center justify-content-between mb-6">
                        <h6 class="m-0 font-weight-bold text-primary">Plan Curricular</h6>   
                    </div>
                </div>
                <div class="card-body">
                    <!-- contenido del body -->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="bg-dark text-white">Ciclo</th>
                                    <th class="bg-dark text-white">Asignatura</th>
                                    <th class="bg-dark text-white">Descripción</th>
                                    <th class="bg-dark text-white">Requisitos</th>
                                    
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($mostrarCursos as $mostrarCurso): ?>
                                    <?php if ($mostrarCurso['ciclo'] == 1): ?> <!-- Agregar condición para el ciclo 1 -->
                                        <tr>
                                            <td><?=$mostrarCurso['ciclo']?></td>
                                            <td><?=$mostrarCurso['asignatura']?></td>
                                            <td><?=$mostrarCurso['descripcion']?></td>
                                            <td><?=$mostrarCurso['requisitos']?></td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                    

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="bg-dark text-white">Ciclo</th>
                                    <th class="bg-dark text-white">Asignatura</th>
                                    <th class="bg-dark text-white">Descripción</th>
                                    <th class="bg-dark text-white">Requisitos</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($mostrarCursos as $mostrarCurso): ?>
                                    <?php if ($mostrarCurso['ciclo'] == 2): ?> <!-- Agregar condición para el ciclo 1 -->
                                        <tr>
                                            <td><?=$mostrarCurso['ciclo']?></td>
                                            <td><?=$mostrarCurso['asignatura']?></td>
                                            <td><?=$mostrarCurso['descripcion']?></td>
                                            <td><?=$mostrarCurso['requisitos']?></td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Add four more tables here -->
                    <!-- Table 3 -->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="bg-dark text-white">Ciclo</th>
                                    <th class="bg-dark text-white">Asignatura</th>
                                    <th class="bg-dark text-white">Descripción</th>
                                    <th class="bg-dark text-white">Requisitos</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($mostrarCursos as $mostrarCurso): ?>
                                    <?php if ($mostrarCurso['ciclo'] == 3): ?> <!-- Agregar condición para el ciclo 1 -->
                                        <tr>
                                            <td><?=$mostrarCurso['ciclo']?></td>
                                            <td><?=$mostrarCurso['asignatura']?></td>
                                            <td><?=$mostrarCurso['descripcion']?></td>
                                            <td><?=$mostrarCurso['requisitos']?></td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Table 4 -->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th class="bg-dark text-white">Ciclo</th>
                                    <th class="bg-dark text-white">Asignatura</th>
                                    <th class="bg-dark text-white">Descripción</th>
                                    <th class="bg-dark text-white">Requisitos</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($mostrarCursos as $mostrarCurso): ?>
                                    <?php if ($mostrarCurso['ciclo'] == 4): ?> <!-- Agregar condición para el ciclo 1 -->
                                        <tr>
                                            <td><?=$mostrarCurso['ciclo']?></td>
                                            <td><?=$mostrarCurso['asignatura']?></td>
                                            <td><?=$mostrarCurso['descripcion']?></td>
                                            <td><?=$mostrarCurso['requisitos']?></td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Table 5 -->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th class="bg-dark text-white">Ciclo</th>
                                    <th class="bg-dark text-white">Asignatura</th>
                                    <th class="bg-dark text-white">Descripción</th>
                                    <th class="bg-dark text-white">Requisitos</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($mostrarCursos as $mostrarCurso): ?>
                                    <?php if ($mostrarCurso['ciclo'] == 5): ?> <!-- Agregar condición para el ciclo 1 -->
                                        <tr>
                                            <td><?=$mostrarCurso['ciclo']?></td>
                                            <td><?=$mostrarCurso['asignatura']?></td>
                                            <td><?=$mostrarCurso['descripcion']?></td>
                                            <td><?=$mostrarCurso['requisitos']?></td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Table 6 -->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th class="bg-dark text-white">Ciclo</th>
                                    <th class="bg-dark text-white">Asignatura</th>
                                    <th class="bg-dark text-white">Descripción</th>
                                    <th class="bg-dark text-white">Requisitos</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($mostrarCursos as $mostrarCurso): ?>
                                    <?php if ($mostrarCurso['ciclo'] == 6): ?> <!-- Agregar condición para el ciclo 1 -->
                                        <tr>
                                            <td><?=$mostrarCurso['ciclo']?></td>
                                            <td><?=$mostrarCurso['asignatura']?></td>
                                            <td><?=$mostrarCurso['descripcion']?></td>
                                            <td><?=$mostrarCurso['requisitos']?></td>
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
