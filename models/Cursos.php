<?php

class Cursos extends DB{
    public function consulta(){
        try{
            $stm = parent::conectar()->prepare("SELECT * FROM cursos");
            $stm->execute();    
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    
    public function stored($curso){
        try{
            $str = parent::conectar()->prepare("INSERT INTO cursos(curso) VALUES (?) ");
            $str->bindParam(1,$curso,PDO::PARAM_INT);
            $str->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    } 
}

?>