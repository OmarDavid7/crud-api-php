<?php

    session_start();
    if($_POST){
        if(($_POST['usuario'] == "omarsoftware") && ($_POST['contrasenia'] == "softsistema")){

            $_SESSION['usuario']="ok";
            $_SESSION['nombreUsuario']="omarsoftware";
            header('Location:inicio.php');
        }else{
            $mensaje="Error: El usuario o contraseña son incorrectos";
        }
    }

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">

        <div class="col-md-4">

        </div>
            
            <div class="col-md-4">
                <br>
                <br>
                <br>
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body mb-3">

                    <?php if(isset($mensaje)){?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje;?>
                    </div>
                    <?php } ?>
                    

                        <form action="" method="post">
                            <div class="form-group mb-3">
                                <label class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="usuario" placeholder="Escribe tu usuario">
                                
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" name="contrasenia" placeholder="Escribe tu contraseña">
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Entrar al administrador</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>