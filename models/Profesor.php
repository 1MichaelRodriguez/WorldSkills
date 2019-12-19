<?php

class Profesor extends DB{
    
    public function stored($fk_tipo_documento,$nombres, $apellidos, $correo, $documento, $pass){
        try{
            $str = parent::conectar()->prepare("INSERT INTO profesores(fk_tipo_documento,nombres,apellidos,correo,documento,pass) VALUES ('$fk_tipo_documento','$nombres', '$apellidos', '$correo', '$documento', '$pass') ");
            $str->execute();
        }catch(Exception $e){
            die("error".$e->getMessage());
        }
    }
    public function requestDocumento($documento, $pass){
        try{
            $str = parent::conectar()->prepare('SELECT * FROM profesores WHERE documento = ? AND pass = ? ');
            $str->bindParam(1,$documento,PDO::PARAM_INT);
            $str->bindParam(2,$pass,PDO::PARAM_STR);
            $str->execute();
            return $str->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die("error".$e->getMessage());
        }
    }
    
}
?>