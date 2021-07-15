<div class="container mt-5 fondo">
    <div class="row justify-content-center" >
        <div class="col-md-8 ">
            <form class="shadow p-4 fondo_login" >
                <!-- inicia el contenedor general -->
                <div class="container ">
                    <!-- inicia el titutolo -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3>Iniciar Sesion</h3>
                        </div>
                    </div>
                    <hr class="hr_login">
                    <!--inicia la parte de ingreso de datos-->
                    <div class="row ">
                        <div class="container">
                            <!-- ingreso numero de empleadox -->
                            <div class="row justify-content-center mt-2">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="no_empleado"><i class="fas fa-id-card mr-2"></i>N° Empleado</label>
                                        <input type="number" class="form-control form-control-sm rounded-pill" id="no_empleado" name="no_empleado" placeholder="Ingresa tu numero de empleado">
                                    </div>
                                </div>
                            </div>
                            <!-- ingreso de contrase;a -->
                            <div class="row justify-content-center mt-2">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="login_contrasenia"><i class="fas fa-lock mr-2"></i>Ingresa Contrasenia</label>
                                        <input type="password" class="form-control form-control-sm rounded-pill " id="login_contrasenia" name="login_contrasenia" placeholder="Ingresa tu contraseña" required >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12 text-center">
                            <span class="btn  botones rounded-pill" id="boton_iniciar"><i class="fas fa-sign-in-alt mr-3"></i>Iniciar Sesion</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="manger/login.js"></script>