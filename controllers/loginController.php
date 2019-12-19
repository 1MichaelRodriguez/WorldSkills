<?php

class loginController extends Login{

    private $usuario;

    public function login(){
        require_once('views/login/login.php');
    }

    public function __construct(){
        try{
            $this->profesor = new profesor();
        }catch(Exception $e){
        }
    }

    public function auth(){
        
        $documento = $_POST['documento'];
        $pass = $_POST['pass'];
        $profesores = $this->profesor->requestDocumento($documento, $pass);
        if($documento == @$profesores->documento && $pass == @$profesores->pass){
            $_SESSION['user']=$profesor;
            header('location: ?c=profesor&m=index');
        }else{
            header('location: ?c=Login&m=login&error=error');
        }
    }

    public function destroy(){
        session_destroy();
        header('location:?c=Login&v=index');
        exit;
    }
}

?>