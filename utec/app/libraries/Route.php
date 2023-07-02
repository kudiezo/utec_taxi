<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Route
 */
class Route {
    //put your code here
    
    //Controlador (padrão 'Paginas')
    private $controller = 'Paginas';
    //Método (padrão 'index')
    private $method = 'index';
    //Parámetros
    private $parameters = [];

    
    //Retorna os elementos da URL numa array
    public function url() {
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
        $url1 = explode('/', trim(rtrim($url, '/')));
        return $url1;
    }
    
    //Construtor da rota
    public function __construct() {
        $url = $this->url();
        
        //Verificar existência do controlador
        if(file_exists('../controllers/'.ucfirst($url[0]).".php")) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }
        
        //Pega a classe do controlador encontrado para poder instanciar
        require_once './../app/controllers/'.$this->controller.'.php';
        //Intancia o controlador
        $this->controller = new $this->controller;
        
        //Verifica a existência de método no controlador encontrado
        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        
        //Pega os parámetros caso existam
        $this->parameters = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->parameters);
        
        //var_dump($this);
    }
    
    
}
