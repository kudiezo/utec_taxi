<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Utilizador
 */
require_once APP_DIR . '/services/UtilizadorServices.php';
class Utilizador extends Controller {
    //put your code here
    //put your code here
    private $utilizadorServices;
    private $clienteModel;
    private $moristaModel;
    
    public function __construct() {
        $this->utilizadorServices = new UtilizadorServices();
    }
    
    public function login() {
        $username = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        
        $resClienteLogin = $this->utilizadorServices->logarCliente($username, $senha);
        $resMotoristaLogin = $this->utilizadorServices->logarMotorista($username, $senha);
        
        if($resClienteLogin != false) {
            session_start();
            $_SESSION['infoUser'] = $resClienteLogin;
            $this->view('cliente/home-cliente', []);
        } 
        elseif($resMotoristaLogin != false) {
            session_start();
            $_SESSION['infoUser'] = $resMotoristaLogin;
        } else {
            $this->view('paginas/login-form', []);
        }
    }
    
    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        $this->view('paginas/login-form', []);
    }
}