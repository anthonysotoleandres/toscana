<?php
$registrarC = new procesoMatriculaC();

$mostrarMatriculas = $registrarC->mostrarMatriculasC();
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
                            <a href="index.php?ruta=matriculaestudiantes" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" >                         
                                <i class="fas fa-solid fa-plus fa-sm "></i>
                                </i> Realizar Matricula</a>
                        </div>
                </div>
                
                <div class="card-body">
                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Ciclo</th>
                                                <th>Turno</th>
                                                <th>Fecha de Matricula</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php foreach($mostrarMatriculas as $mostrarMatricul):?>
                                                
                                                <tr>
                                                    
                                                    <td><?=$mostrarMatricul['nombre']?></td>
                                                    <td><?=$mostrarMatricul['apellido']?></td>
                                                    <td><?=$mostrarMatricul['ciclo']?></td>
                                                    <td><?=$mostrarMatricul['turno']?></td>
                                                    <td><?=$mostrarMatricul['fechamatricula']?></td>
                                                    
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-circle">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>

                                                        <a href="#" class="btn btn-danger btn-circle">
                                                            <i class="fas fa-trash"></i>
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


