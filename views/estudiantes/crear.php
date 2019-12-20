<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/all/css/style.css">
    <link rel="stylesheet" href="assets/libs/bootstrap-4/css/bootstrap.css"> 
    <title>Crear Estudiante</title>
</head>
<body background="assets/all/img/crearec.jpg" class="fondo">
    
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-4">
            <center><h2>Registrar Estudiante</h2></center>
            <form action="?c=estudiantes&m=store" method="post"> 
                <h3 class="l">curso</h3>
                <select class="form-control" name="fk_cursos"  required>
                <?php /*$tipoCursos = parent::consultaCursos();
                 foreach($tipoCursos as $curso){ */?>
                    <option value="<?php echo $curso->id_cursos; ?>"><?php echo $curso->curso; ?></option>
                 <?php /*}*/ ?>
                </select>
                <h3 class="l">Nombres</h3>
                <input type="text" class="form-control" name="nombres" placeholder="michael david" required>
                <h3 class="l">Apellidos</h3>
                <input type="text" name="apellidos" placeholder="rodriguez amado" class="form-control" required>
                <h3 class="l">Correo</h3>
                <input type="email" name="correo" placeholder="Mdavidramado@gmail.com" class="form-control" required>
                <h3 class="l">edad</h3>
                <input type="date" name="edad" class="form-control" required>
                <h3 class="l">tipo documento</h3>
                <select class="form-control" name="fk_tipo_documento" id="fk_tipo_documento" require>
                <?php /*$tipoDocumento = parent::consultaTipoDocumento();
                 foreach($tipoDocumento as $documento){ */?>
                    <option value="<?php echo $documento->id_tipo_documento; ?>"><?php echo $documento->tipo_documento; ?></option>
                 <?php /*}*/ ?>
                </select>
                <h3 class="l">Documento</h3>
                <input type="number" name="documento" placeholder="100127..." class="form-control" required>
                <br>
                <center><input type="submit" class="btn btn-dark" value="registrar">
                <a href="?c=profesor&m=index" class="btn btn-dark">Regresar</a></center>
            </form>
        </div>
    </div>
</div>

</body>
</html>