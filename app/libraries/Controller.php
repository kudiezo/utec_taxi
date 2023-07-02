<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Controller
 */
class Controller {
    //put your code here

    //Pegando o modelo
    public function model($model) {
        $file = APP_DIR.'/models/'.$model.'.php';
        if(file_exists($file)) {
            require_once $file;
        } else {
            echo 'Modelo inexistente!';
        }
    }
    
    //Chamando a view
    public function view($view, $data = []) {
        $file = APP_DIR.'/views/'.$view.'.php';
        if(file_exists($file)) {
            require_once $file;
        } else {
            echo 'View inexistente!';
        }
    }
    
}
