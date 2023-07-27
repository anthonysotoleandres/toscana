<?php
$matricularC = new procesoMatriculaC();
$matricularC->registroMatriculaC();

$mostrarEstudiantes = $matricularC->mostrarEstudiantesC();

$mostrarMatriculas = $matricularC->mostrarMatriculas2C();

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
                                    <input type="number" class="form-control bg-light border-0 small" placeholder="Buscar DNI"
                                        aria-label="Search" aria-describedby="basic-addon2" name="dniBU" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        maxlength="8" min="10000000" max="99999999" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                                  <!-- ENTRADA DE NOMBRE  -->                  
                            <div class="form-group col-sm-6">
                                <div class="row">
                                    <label for="nombre" class="font-weight-bold col-sm-3">Nombre:</label>
                                    <div class="col-sm-9">
                                        <?php if (isset($_POST['dniBU']) && !empty($_POST['dniBU'])): ?>
                                            <?php $mostrarEstudiantes = $matricularC->mostrarEstudiantesC(); ?>
                                            <?php if ($mostrarEstudiantes !== null && mysqli_num_rows($mostrarEstudiantes) > 0): ?>
                                                <?php while ($mostrarEstudiante = mysqli_fetch_assoc($mostrarEstudiantes)): ?>                       
                                                    <input type="text" value="<?=$mostrarEstudiante['nombre']?>" class="form-control" id="nombre" readonly>
                                                <?php endwhile; ?> 
                                            <?php else: ?>
                                                <input type="text" class="form-control" id="nombre" value="Nombre no Encontrado" readonly>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" readonly>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                                <!-- ENTRADA DE APELLIDO  -->
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <label for="apellido" class="font-weight-bold col-sm-3">Apellido:</label>
                                        <div class="col-sm-9">

                                        <?php if (isset($_POST['dniBU']) && !empty($_POST['dniBU'])): ?>
                                            <?php $mostrarEstudiantes = $matricularC->mostrarEstudiantesC(); ?>
                                            <?php if ($mostrarEstudiantes !== null && mysqli_num_rows($mostrarEstudiantes) > 0): ?>
                                                <?php while ($mostrarEstudiante = mysqli_fetch_assoc($mostrarEstudiantes)): ?>                       
                                                    <input type="text" value="<?=$mostrarEstudiante['apellido']?>" class="form-control" id="apellido" readonly>
                                                <?php endwhile; ?> 
                                            <?php else: ?>
                                                <input type="text" class="form-control" id="apellido" placeholder="Apellido no Encontrado" readonly>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <input type="text" class="form-control" id="apellido" placeholder="Apellido" readonly>
                                        <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                                <!-- ENTRADA DE TELEFONO  -->
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <label for="telefono" class="font-weight-bold col-sm-3">Teléfono:</label>
                                        <div class="col-sm-9">
                                            <?php if (isset($_POST['dniBU']) && !empty($_POST['dniBU'])): ?>
                                                <?php $mostrarEstudiantes = $matricularC->mostrarEstudiantesC(); ?>
                                                <?php if ($mostrarEstudiantes !== null && mysqli_num_rows($mostrarEstudiantes) > 0): ?>
                                                    <?php while ($mostrarEstudiante = mysqli_fetch_assoc($mostrarEstudiantes)): ?>                       
                                                        <input type="text" value="<?=$mostrarEstudiante['telefono']?>" class="form-control" id="telefono" readonly>
                                                    <?php endwhile; ?> 
                                                <?php else: ?>
                                                    <input type="text" class="form-control" id="telefono" value="Teléfono no Encontrado" readonly>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <input type="tel" class="form-control" id="telefono" placeholder="Teléfono" readonly>
                                            <?php endif; ?>                                
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <label for="ciclo" class="font-weight-bold col-sm-3">Ciclo:</label>
                                        <div class="col-sm-9">
                                            <?php if (isset($_POST['dniBU']) && !empty($_POST['dniBU'])): ?>
                                                <?php $mostrarMatriculas = $matricularC->mostrarMatriculas2C(); ?>
                                                <?php if ($mostrarMatriculas !== null && mysqli_num_rows($mostrarMatriculas) > 0): ?>
                                                    <?php $datosEstudiante = mysqli_fetch_assoc($mostrarMatriculas); ?>
                                                    <input type="text" value="<?= $datosEstudiante['ciclo'] ?>" class="form-control" id="ciclo" readonly>
                                                <?php else: ?>
                                                    <input type="text" class="form-control" id="ciclo" value="Ciclo no Encontrado o No Asignado" readonly>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <input type="text" class="form-control" id="ciclo" placeholder="Ciclo" readonly>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>






                                <!-- Agrega codigo estudiantes -->
                                <div class="form-group col-sm-6">
                                    <div class="row">
                                        <label for="codigo" class="font-weight-bold col-sm-3">Código:</label>
                                        <div class="col-sm-9">
                                            <?php if (isset($_POST['dniBU']) && !empty($_POST['dniBU'])): ?>
                                                <?php $mostrarMatriculas = $matricularC->mostrarMatriculas2C(); ?>
                                                <?php if ($mostrarMatriculas !== null && mysqli_num_rows($mostrarMatriculas) > 0): ?>
                                                    <?php $datosEstudiante = mysqli_fetch_assoc($mostrarMatriculas); ?>
                                                    <input type="text" value="<?= $datosEstudiante['codigo_estudiante'] ?>" class="form-control" id="codigo" readonly>
                                                <?php else: ?>
                                                    <input type="text" class="form-control" id="codigo" value="Código no Encontrado o No Asignado" readonly>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <input type="text" class="form-control" id="codigo" placeholder="Código" readonly>
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