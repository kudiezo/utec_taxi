<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Pages
 *
 * @author KudiezoJr
 */
class Paginas extends Controller {
    //put your code here
    
    //Método padrão do controlador
    public function index() {
        $data = [
            'title' => 'Home',
            'desc' => ''
        ];
        $this->view('paginas/home', $data);
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
            'title' => 'Sobre',
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
}
