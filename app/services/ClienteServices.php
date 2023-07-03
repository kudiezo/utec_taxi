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
}
