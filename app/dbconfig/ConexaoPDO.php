<?php
class ConexaoPDO extends PDO {
//PROPRIEDADES
    protected $erro = null;
    private $sql;
    
//CONSTRUTOR
    public function __construct($dsn='mysql:dbname=`sistema_de_taxi_utec`;host=127.0.0.1',$username='root', $password='', array $options=null) {
        try{
            parent::__construct($dsn, $username, $password, $options);
            $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch(PDOException $e) {
            $this->erro = $e->getMessage();
            throw $e;
        }
    }
    
//GETTERS    
    public function getErro() {
        return $this->erro;
    }
    
    protected function getSql() {
        return $this->sql;
    }
    
//SETTERS
    protected function setErro($erro) {
        $this->erro = $erro;
    }
    
    protected function setSql($sql) {
        $this->sql = $sql;
    }

//DESTRUTOR    
    public function __destruct() {
        $this->sql = NULL;
    }
    
}