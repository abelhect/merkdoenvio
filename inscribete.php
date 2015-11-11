<?php
include 'core/init.php'; //include to check if the user is signed on or not
 include 'includes/overall/header.php';?>
		    <h1 class="text-center">Inscríbete</h1>
                    <br></br>
                    <!--Beginning of Form-->
                    <form class="form-horizontal" action="registration.php" method="post">
                        <div class="form-group">
                                <label for="FirstName" class="col-sm-3 control-label">Nombre:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="FirstName" placeholder="e.j.: Juan">
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="LastName" class="col-sm-3 control-label">Apellido:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="LastName" placeholder="e.j.: Pérez">
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="Email" class="col-sm-3 control-label">Correo Electrónico:</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="Email" placeholder="e.j.: juan2015@correo.com">
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="UserName" class="col-sm-3 control-label">Nombre de Usuario:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="UserName" placeholder="e.j.: juan2015">
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="Password" class="col-sm-3 control-label">Contraseña:</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="Password" placeholder="e.j.: C0ntr@s3na!#d1ficil">
                                </div>
                        </div>
                       <!-- <div class="checkbox">
                            <label>
                                <input type="checkbox"> Acepte nuestra póliza de usuario.
                            </label>                                                  
                            </div>-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </form>
<?php include 'includes/overall/footer.php';?>
