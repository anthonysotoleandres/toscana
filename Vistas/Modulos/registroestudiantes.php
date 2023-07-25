<?php
$registrarC = new procesoEstudiantesC();
$registrarC->registroEstudiantesC();
$mostrarEstudiantes = $registrarC->mostrarEstudiantesC();
$registrarC->borrarEstudiantesC();
?>




<div class="container-fluid">


    <!-- Content Row -->
    <div class="row">

        

        <!-- Fade In Utility -->
        <div class="col-lg-12">

            <div class="card position-relative">
                <div class="card-header py-3">               
                    <div class="d-sm-flex align-items-center justify-content-between mb-6">
                    <h6 class="m-0 font-weight-bold text-primary">Estudiantes Registrados</h6>   
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#registroEstudiante">                         
                                <i class="fas fa-solid fa-plus fa-sm "></i>
                                </i> Agregar Estudiante</a>
                        </div>
                </div>
                
                <div class="card-body">
                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Genero</th>
                                                <th>DNI</th>
                                                <th>Telefono</th>
                                                <th>Email</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                    
                                        <tbody>

                                            <?php foreach($mostrarEstudiantes as $mostrarEstudiante): ?>
                                            
                                                <tr>
                                                    
                                                    <td><?=$mostrarEstudiante['nombre']?></td>
                                                    <td><?=$mostrarEstudiante['apellido']?></td>
                                                    <td><?=$mostrarEstudiante['genero']?></td>
                                                    <td><?=$mostrarEstudiante['dni']?></td>
                                                    <td><?=$mostrarEstudiante['telefono']?></td>
                                                    <td><?=$mostrarEstudiante['email']?></td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-circle">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="index.php?ruta=registroestudiantes&idESTU=<?=$mostrarEstudiante['idestudiantes']?>" class="btn btn-danger btn-circle">
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

<!-- VENTANA DE REGISTRO NUEVO ESTUDIANTE-->
<div class="modal fade" id="registroEstudiante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrar Nuevo Estudiante</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" class="user">
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-2 col-form-label font-weight-bold">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombreRE">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellido" class="col-sm-2 col-form-label font-weight-bold">Apellido:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="apellidoRE">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dni" class="col-sm-2 col-form-label font-weight-bold">DNI:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="dni" placeholder="DNI" name="dniRE">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="genero" class="col-sm-2 col-form-label font-weight-bold">Género:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="genero" name="generoRE">
                                <option value="">Seleccionar</option>
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                            </select>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono" class="col-sm-2 col-form-label font-weight-bold">Teléfono:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="telefono" placeholder="Teléfono"name="telefonoRE">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label font-weight-bold">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="emailRE">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit" >Registrar</button>
                    </div>
                </form>


            </div>
            
        </div>
    </div>
</div>
