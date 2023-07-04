<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Motorista
 */
require_once APP_DIR . '/services/MotoristaServices.php';
require_once APP_DIR . '/model/Motorista.php';
class Motoristas extends Controller {
    //put your code here
    private $motoristaServices;
    private $motoristaModel;

    public function __construct() {
        $this->motoristaServices = new MotoristaServices();
        $this->motoristaModel = new Motorista('', '', '', '', '', '', '', '', '', '');
    }
    
    //Método padrão do controlador
    public function index() {
        $data = [
            'title' => 'Motorista Home',
            'desc' => ''
        ];
        $this->view('motorista/home-motorista', $data);
    }
    
    public function cadastro() {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $dataNasc = filter_input(INPUT_POST, 'dataNasc', FILTER_SANITIZE_STRING);
        $morada = filter_input(INPUT_POST, 'morada', FILTER_SANITIZE_STRING);
        $tipoVeiculo = filter_input(INPUT_POST, 'tipoVeiculo', FILTER_SANITIZE_STRING);
        $empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $password1  = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $password2  = filter_input(INPUT_POST, 'confPassword', FILTER_SANITIZE_STRING);
        
        if($password1 === $password2) {
            $this->motoristaModel->setNome($nome);
            $this->motoristaModel->setDataNasc($dataNasc);
            $this->motoristaModel->setMorada($morada);
            $this->motoristaModel->setEmail($email);
            $this->motoristaModel->setTipoVeiculo($tipoVeiculo);
            $this->motoristaModel->setEmpresa($empresa);
            $this->motoristaModel->setSenha($password1);
            
            
            $resultado = $this->motoristaServices->cadastrar($this->motoristaModel);
            
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
