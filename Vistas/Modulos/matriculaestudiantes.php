<?php
$matricularC = new procesoMatriculaC();
$matricularC->registroMatriculaC();

$mostrarEstudiantes = $matricularC->mostrarEstudiantesC();
?>






<div class="container-fluid">


    <!-- Content Row -->
    <div class="row">
                <!-- Fade In Utility -->
                <div class="col-lg-12">

                    <div class="card position-relative">
                        
                        <div class="card-header py-3">               
                            <div class="d-sm-flex align-items-center justify-content-between mb-6">
                            <h6 class="m-0 font-weight-bold text-primary">Registrar Matricula</h6>   
                                    
                                </div>
                        </div>
                        
                        <div class="card-body">

                            <div style="display: flex; align-items: center; margin: 20px 0;">
                                <hr style="flex-grow: 1; border: none; border-top: 1px dashed #999;">
                                <p style="margin: 0 10px; font-size: 16px; color: #999;">Datos Personales</p>
                                <hr style="flex-grow: 1; border: none; border-top: 1px dashed #999;">
                            </div>

                            <div class="form-row align-items-center">
                                <form method="post" class="col-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar DNI"
                                            aria-label="Search" aria-describedby="basic-addon2" name="dniBU">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <label for="nombre" class="font-weight-bold col-sm-3">Nombre:</label>
                                        <div class="col-sm-9">
                                            <?php if (isset($_POST['dniBU'])): ?>
                                                <?php foreach($mostrarEstudiantes as $mostrarEstudiante): ?>                       
                                                    <input type="text" value=<?=$mostrarEstudiante['nombre']?> class="form-control" id="nombre" readonly>
                                                <?php endforeach; ?> 
                                                <?php else: ?>
                                                    <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <label for="apellido" class="font-weight-bold col-sm-3">Apellido:</label>
                                        <div class="col-sm-9">

                                            <?php if (isset($_POST['dniBU'])): ?>
                                                <?php foreach($mostrarEstudiantes as $mostrarEstudiante): ?>                       
                                                    <input type="text" value="<?=$mostrarEstudiante['apellido']?>" class="form-control" id="apellido" readonly>
                                                <?php endforeach; ?> 
                                                <?php else: ?>
                                                    <input type="text" class="form-control" id="apellido" placeholder="Apellido">
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <label for="telefono" class="font-weight-bold col-sm-3">Teléfono:</label>
                                        <div class="col-sm-9">
                                            <?php if (isset($_POST['dniBU'])): ?>
                                                <?php foreach($mostrarEstudiantes as $mostrarEstudiante): ?>                       
                                                    <input type="text" value=<?=$mostrarEstudiante['telefono']?> class="form-control" id="telefono" readonly>
                                                <?php endforeach; ?> 
                                                <?php else: ?>
                                                    <input type="tel" class="form-control" id="telefono" placeholder="Teléfono">
                                            <?php endif; ?>




                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="display: flex; align-items: center; margin: 20px 0;">
                                <hr style="flex-grow: 1; border: none; border-top: 1px dashed #999;">
                                <p style="margin: 0 10px; font-size: 16px; color: #999;">Detalle de Matricula</p>
                                <hr style="flex-grow: 1; border: none; border-top: 1px dashed #999;">
                            </div>

                            <?php if (isset($_POST['dniBU'])): ?>
                                                                     
                                <form method="post">
                                    <?php foreach($mostrarEstudiantes as $mostrarEstudiante): ?>                       
                                                    <input type="number" value=<?=$mostrarEstudiante['idestudiantes']?> name="idRM" hidden >
                                        <?php endforeach; ?>
                                <div class="form-row align-items-center">
                                    <div class="form-group col-sm-4">
                                        <label for="nombre" class="font-weight-bold">Fecha de Matricula</label>
                                        <?php
                                            date_default_timezone_set("America/Lima"); // establecer la zona horaria a Lima
                                            $hoy = date("H:i/d/M"); // obtener la hora, el minuto, el día y el mes actual
                                        ?>
                                        <input type="text" class="form-control" id="nombre" value=<?=$hoy?> name="fecha_matriculaRM" readonly>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="nombre" class="font-weight-bold">Ciclo</label>
                                        <select class="form-control" id="genero" name="cicloRM">
                                            <option value="">Seleccionar</option>
                                            <option value="Ciclo-I">Ciclo-I</option>
                                            <option value="Ciclo-II">Ciclo-II</option>
                                            <option value="Ciclo-III">Ciclo-III</option>
                                            <option value="Ciclo-IV">Ciclo-IV</option>
                                            <option value="Ciclo-V">Ciclo-V</option>
                                            <option value="Ciclo-VI">Ciclo-VI</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="telefono" class="font-weight-bold">Turno</label>
                                        <select class="form-control" id="genero" name="turnoRM">
                                            <option value="">Seleccionar</option>
                                            <option value="Mañana">Mañana</option>
                                            <option value="Noche">Noche</option>
                                        
                                        </select>
                                        
                                    </div>
                                    
                                    <!-- Agrega más grupos de campos si es necesario -->
                                    
                                    <div class="form-group col-sm-4">
                                        <label for="matricula" class="font-weight-bold">Matricula</label>
                                        <input type="number" class="form-control" id="matricula" placeholder="S/." name="matriculaRM">
                                    </div>
                                    
                                    <div class="form-group col-sm-4">
                                        <label for="mensualidad" class="font-weight-bold">Mensualidad</label>
                                        <input type="number" class="form-control" id="mensualidad" placeholder="S/." name="mensualidadRM">
                                    </div>
                                    
                                    <div class="form-group col-sm-4">
                                        <label for="estado" class="font-weight-bold">Año Academico</label>
                                            <?php
                                                date_default_timezone_set("America/Lima"); // fecha horarioa
                                                $hoy = date("Y", time()); //sacando la fecha
                                            ?>
                                        <input type="number" class="form-control" id="estado" value=<?=$hoy?> name="añoRM" readonly>
                                    </div>
                                    
                                    <div class="form-group col-sm-12 text-center">
                                        <button class="btn btn-primary" type="submit">Guardar cambios</button>
                                    </div>
                                </div>
                            </form>
                                                
                                                <?php else: ?>
                                                    
                                            <?php endif; ?>
                           















                        </div>

                    </div>

                </div>
        


    </div>

</div>    