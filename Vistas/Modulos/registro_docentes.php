<?php
$registrarC = new procesoDocentesC();
$registrarC->registroDocentesC();
?>




<div class="container-fluid">


    <!-- Content Row -->
    <div class="row">

        

        <!-- Fade In Utility -->
        <div class="col-lg-12">

            <div class="card position-relative">
                <div class="card-header py-3">               
                    <div class="d-sm-flex align-items-center justify-content-between mb-6">
                    <h6 class="m-0 font-weight-bold text-primary">Registrar Docente</h6>   
                            
                        </div>
                </div>
                
                <div class="card-body">
                    <!-- contenido del body -->
                    <form method="post" class="user">       
                                <div class="form-row align-items-center">
                                    <div class="form-group col-sm-4">
                                        <label for="nombre" class="font-weight-bold">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombreRD">
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="estado" class="font-weight-bold">Apellido</label>
                                        <input type="text" class="form-control" id="estado" placeholder="Apellido" name="apellidoRD">
                                    </div>
                                    

                                    <div class="form-group col-sm-4">
                                        <label for="apellido" class="font-weight-bold">DNI</label>
                                        <input type="number" class="form-control" id="apellido" placeholder="DNI" name="dniRD">
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="telefono" class="font-weight-bold">Telefono</label>
                                        <input type="number" class="form-control" id="telefono" placeholder="Teléfono" name="telefonoRD">
                                    </div>
                                    
                                    <!-- Agrega más grupos de campos si es necesario -->
                                    
                                    <div class="form-group col-sm-4">
                                        <label for="matricula" class="font-weight-bold">Género</label>
                                        <select class="form-control" id="genero" name="generoRD">
                                            <option value="">Seleccionar</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                        
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-sm-4">
                                        <label for="mensualidad" class="font-weight-bold">Email</label>
                                        <input type="email" class="form-control" id="mensualidad" placeholder="Email" name="emailRD">
                                    </div>
                                    
                                    <div class="form-group col-sm-12 text-center">
                                        <button class="btn btn-primary" type="submit">Registrar Docente</button>
                                    </div>
                                    

                                </div>

                    </form>
            </div>

        </div>

    </div>

</div>
