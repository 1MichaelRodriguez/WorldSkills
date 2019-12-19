<?php

class Estudiantes extends DB{
    public function consulta(){
        try{
            $stm = parent::conectar()->prepare("SELECT * FROM estudiantes");
            $stm->execute();    
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    
    public function stored($fk_tipo_documento,$fk_cursos, $nombres, $apellidos, $correo, $edad, $documento){
        try{
            $str = parent::conectar()->prepare("INSERT INTO estudiantes(fk_tipo_documento,fk_cursos,nombres,apellidos,correo,edad,documento) VALUES (?,?,?,?,?,?,?) ");
            $str->bindParam(1,$fk_tipo_documento,PDO::PARAM_INT);
            $str->bindParam(2,$fk_cursos,PDO::PARAM_INT);
            $str->bindParam(3,$nombres,PDO::PARAM_STR);
            $str->bindParam(4,$apellidos,PDO::PARAM_STR);
            $str->bindParam(5,$correo,PDO::PARAM_STR);
            $str->bindParam(6,$edad,PDO::PARAM_STR);
            $str->bindParam(7,$documento,PDO::PARAM_INT);
            $str->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    } 

    public function consultaTipoDocumento(){
        try{
            $stm = parent::conectar()->prepare("SELECT * FROM tipo_documento");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function consultaCursos(){
        try{
            $stm = parent::conectar()->prepare("SELECT * FROM cursos");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
?>