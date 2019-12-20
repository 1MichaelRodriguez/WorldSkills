<?php

class cursosController extends Cursos{
    public function crear(){
        require_once('views/cursos/crear.php');
    }

    public function store(){
        $curso = $_POST['curso'];
        parent::stored($curso);
        header('location:?c=profesor&m=index');
    }
}

?>