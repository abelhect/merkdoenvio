<?php

include 'core/init.php';
include 'includes/overall/header.php';?>
		    <h1 class="text-center">Inicia Sesión</h1>
                    <br></br>     
                    <form action="login.php" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label for="UserName" class="col-sm-3 control-label">Nombre de Usuario</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="UserName" placeholder="Nombre de Usuario">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Password" class="col-sm-3 control-label">Contraseña</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="Password" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Recuérdame
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                                <button type="submit" class="btn btn-primary">Inicia Sesión</button>
                            </div>
                        </div>
                    </form> 
<?php include 'includes/overall/footer.php';?>
