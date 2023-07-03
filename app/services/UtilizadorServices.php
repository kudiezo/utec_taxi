<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of UtilizadorServices
 *
 * @author kudiezo.jr
 */
class UtilizadorServices {
    //put your code here
    private $clienteRepository;
    private $motoristaRepository;
    
    public function __construct() {
        $this->clienteRepository = new ClienteRepository();
        $this->motoristaRepository = new MotoristaRepository();
    }


    public function logarCliente($username, $senha) { 
        $sqlScript = "SELECT * FROM cliente WHERE email = '$username' AND password = '$senha' LIMIT 1;";
        $resultado = $this->clienteRepository->selectOne($sqlScript);
        return $resultado;
    }
    
    public function logarMotorista($username, $senha) { 
        $sqlScript = "SELECT * FROM motorista WHERE email = '$username' AND password = '$senha' LIMIT 1";
        $resultado = $this->motoristaRepository->selectOne($sqlScript);
        return $resultado;
    }
}
