<?php

class estudiantesController extends Estudiantes{
    public function crear(){
        require_once('views/estudiantes/crear.php');
    }

    public function store(){
        $fk_tipo_documento = $_POST['fk_tipo_documento'];
        $fk_cursos = $_POST['fk_cursos'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $edad = $_POST['edad'];
        $documento = $_POST['documento'];
        parent::stored($fk_tipo_documento, $fk_cursos, $nombres, $apellidos, $correo, $edad, $documento);
        header('location:?c=profesor&m=index');
    }
}

?>