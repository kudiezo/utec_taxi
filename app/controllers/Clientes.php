<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Clients
 */
require_once APP_DIR . '/services/ClienteServices.php';
require_once APP_DIR . '/model/Cliente.php';
class Clientes extends Controller {
    //put your code here
    private $clienteServices;
    private $clienteModel;

    public function __construct() {
        $this->clienteServices = new ClienteServices();
        $this->clienteModel = new Cliente('', '', '', '', '', '', '', '', '');
    }
    
    //Método padrão do controlador
    public function index() {
        $data = [
            'title' => 'Cliente Home',
            'desc' => ''
        ];
        $this->view('cliente/home-cliente', $data);
    }
    
    public function cadastro() {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $dataNasc = filter_input(INPUT_POST, 'dataNasc', FILTER_SANITIZE_STRING);
        $morada = filter_input(INPUT_POST, 'morada', FILTER_SANITIZE_STRING);
        //$tipo_veiculo = filter_input(INPUT_POST, 'tipo_veiculo', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $password1  = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $password2  = filter_input(INPUT_POST, 'confPassword', FILTER_SANITIZE_STRING);
        
        if($password1 === $password2) {
            $this->clienteModel->setNome($nome);
            $this->clienteModel->setDataNasc($dataNasc);
            $this->clienteModel->setMorada($morada);
            $this->clienteModel->setLocalizacao("0 0");
            $this->clienteModel->setEmail($email);
            $this->clienteModel->setSenha($password1);
            
            $resultado = $this->clienteServices->cadastrar($this->clienteModel);
            
            if($resultado != false) {
                $data = [];
                $this->view('paginas/login-form', $data);
            } else {
                $data = [];
                $this->view('paginas/sign-up', $data);
            }
        } else {
            $this->view('paginas/sign-up', []);
        }
        
    }
}
