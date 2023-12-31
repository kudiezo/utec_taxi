<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of MotoristaRepository
 */

 require_once APP_DIR . '/dbconfig/ConexaoPDO.php';

class MotoristaRepository extends ConexaoPDO {
    public function insert($sqlScript) {
        $this->setSql($sqlScript);
        $stmt = $this->prepare($this->getSql());
        try {
            $stmt->execute();
            $stmt->closeCursor();
            parent::__destruct();
            return TRUE;
        } catch (Exception $ex) {
            $this->setErro($ex->getMessage());
            parent::__destruct();
            return FALSE;
        }
    }

    public function delete() {
     
    }

    public function update() {
       
    }
    //ADAPTADO PARA AS PRIMEIRAS FUNCIONALIDADES
    public function selectOne($sqlScript) {
        $this->setSql($sqlScript);
        $stmt = $this->prepare($this->getSql());
        try {
            $stmt->execute();
            $resultado = $stmt->fetchObject();
            $stmt->closeCursor();
            parent::__destruct();
            return $resultado;
        } catch (Exception $ex) {
            $this->setErro($ex->getMessage());
            parent::__destruct();
            return FALSE;
        }
    }
    
    public function selectMulti($sqlScript) {
        $this->setSql("$sqlScript");
        $stmt = $this->prepare($this->getSql());
        try {
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            $stmt->closeCursor();
            parent::__destruct();
            return $resultado;
        } catch (Exception $ex) {
            $this->setErro($ex->getMessage());
            parent::__destruct();
            return FALSE;
        }
    }
}
