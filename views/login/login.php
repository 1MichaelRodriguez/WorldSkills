<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/all/css/style.css">
    <link rel="stylesheet" href="assets/libs/bootstrap-4/css/bootstrap.css">
    <title>Login</title>
</head>
<body  background="assets/all/img/login.jpg" class="fondo">

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-1">
            <center><h1 class="tl xd">Ingresa tus datos</h1>
            <h3 class="tl xd">Para que disfrutes de nuestros servicios</h3>
            <h3 class="tl xd">    y tengas mas tiempo para ti.</h3></center>
        </div>
    </div>
</div>
    


<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-1">
            <form action="?c=Login&m=auth" method="post" class="lg">
                <label for="" class="letra-login">Documento</label>
                <input type="number" name="documento" class="form-control" required>
                <label for="" class="letra-login">Contraseña</label>
                <input type="password" name="pass" class="form-control" required>
                <div>
                <input type="submit" class="btn btn-danger bt1" value="ingresar">
                <a href="?c=pagina&m=index" class="btn btn-danger bt2">regresar</a>
                </div>
            </form>
        </div>
    </div>
</div>
    
<?php if(@$_REQUEST['error']){ ?>
<div class="container">
        <div class="row">
            <div class="col-md-6">
                    <center><h3>Documento o Contraseña Incorrecta</h3></center>
                </div>
            </div>
        </div>
    </div>
<?php }?>
</body>
</html>