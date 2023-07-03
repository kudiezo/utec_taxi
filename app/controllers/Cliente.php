<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Clients
 */
class Cliente extends Controller
{
    //put your code here

    //Método padrão do controlador
    public function index()
    {
        $data = [
            'title' => 'Cliente Home',
            'desc' => ''
        ];
        $this->view('cliente/home-cliente', $data);
    }
}