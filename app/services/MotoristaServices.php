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
class MotoristaServices {
    //put your code here 
    private $motoristaRepository;
    
    public function __construct() {
        $this->motoristaRepository = new MotoristaRepository();
    }
    
    public function cadastrar(Motorista $motorista) { 
        $sqlScript = "CALL cadastrar_motorista('{$motorista->getEmail()}', '{$motorista->getNome()}', "
        . "'{$motorista->getSenha()}', '{$motorista->getMorada()}', '{$motorista->getDataNasc()}', "
        . "'{$motorista->getTipoVeiculo()}', '{$motorista->getEmpresa()}');";
        $resultado = $this->motoristaRepository->insert($sqlScript);
        return $resultado;
    }
}
