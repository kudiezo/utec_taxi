<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of MotoristaServices
 *
 * @author kudiezo.jr
 */
require_once APP_DIR . '/repositories/MotoristaRepository.php';
//require_once APP_DIR . '/model/Motorista.php';
class MotoristaServices {
    //put your code here 
    private $motoristaRepository;
    
    public function __construct() {
        $this->motoristaRepository = new MotoristaRepository();
    }
    
    public function cadastrar(Motorista $motorista) { 
        $sqlScript = "CALL cadastrar_motorista('{$motorista->getEmail()}', '{$motorista->getNome()}', "
        . "'{$motorista->getSenha()}', '{$motorista->getMorada()}', '{$motorista->getDataNasc()}', "
        . "{$motorista->getTipoVeiculo()}, {$motorista->getEmpresa()});";
        $resultado = $this->motoristaRepository->insert($sqlScript);
        return $resultado;
    }
    
    public function getHistoricoViagem($email) {
        $sqlScript = "SELECT * FROM viagem WHERE email_motorista '$email';";
        
        $result = $this->motoristaRepository->selectMulti($sqlScript);
        if($result != false) {
            return $result;
        }
    }
}
