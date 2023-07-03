<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of ClienteServices
 */
require_once APP_DIR . '/repositories/ClienteRepository.php';
class ClienteServices {
    //put your code here

    private $clienteRepository;
    
    public function __construct() {
        $this->clienteRepository = new ClienteRepository();
    }
    
    public function cadastrar(Cliente $cliente) { 
        //$sqlScript = "";
        $resultado = $this->clienteRepository->insert($cliente);
        return $resultado;
    }
    
    public function addViagem($emailCliente, $emailMotorista, $horaIni, $horaFim, $coorOrigem, 
            $cordDest, $custoEstimado, $custoReal, $classificacaoMotorista) {
        
        $sqlScript = "INSERT INTO viagem VALUES (default, '$emailCliente', '$emailMotorista', "
                . "'$horaIni', '$horaFim', '$coorOrigem', '$cordDest', '$custoEstimado', "
                . "'$custoReal', '$classificacaoMotorista');";
        
        $result = $this->clienteRepository->insertCustom($sqlScript);
        if($result != false) {
            return $result;
        }
    }
    
    public function getHistoricoViagem($email) {
        $sqlScript = "SELECT * FROM viagem WHERE email_cliente '$email';";
        
        $result = $this->clienteRepository->selectMulti($sqlScript);
        if($result != false) {
            return $result;
        }
    }
}
