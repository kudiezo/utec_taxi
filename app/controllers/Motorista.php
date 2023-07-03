<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Motorista
 */
class Motorista extends Controller {
    //put your code here
    
    //Método padrão do controlador
    public function index() {
        $data = [
            'title' => 'Motorista Home',
            'desc' => ''
        ];
        $this->view('motorista/home-motorista', $data);
    }
}
