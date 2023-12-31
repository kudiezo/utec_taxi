<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Pages
 */
class Paginas extends Controller {
    //put your code here
    
    //Método padrão do controlador
    public function index() {
        $data = [
            'title' => 'Home',
            'desc' => ''
        ];
        $this->view('paginas/bem-vindo', $data);
    }
    
    public function sobre() {
        $data = [
            'title' => 'Sobre',
            'desc' => ''
        ];
        $this->view('paginas/sobre', $data);
    }
    
    public function contatos() {
        $data = [
            'title' => 'Contactos',
            'desc' => ''
        ];
        $this->view('paginas/contatos', $data);
    }
    
    public function taxis() {
        $data = [
            'title' => 'Táxis',
            'desc' => ''
        ];
        $this->view('paginas/taxis', $data);
    }

    public function boasvindas() {
        $data = [
            'title' => 'Boas-Vindas',
            'desc' => ''
        ];
        $this->view('paginas/bem-vindo', $data);
    }

    public function login() {
        $data = [
            'title' => 'Login',
            'desc' => ''
        ];
        $this->view('paginas/login-form', $data);
    }

    public function signup() {
        $data = [
            'title' => 'Sign Up',
            'desc' => ''
        ];
        $this->view('paginas/sign-up', $data);
    }
}
