<?php
abstract class Utilizador{
    protected $id;
    protected $nome;
    protected $email;
    protected $senha;
    protected $morada;
    protected $perfil;
    protected $dataNasc;

    public function __construct($id, $nome, $email, $senha, $dataNasc, $morada, $perfil) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->dataNasc = $dataNasc;
        $this->morada = $morada;
        $this->perfil = $perfil;
    }
    
    //abstract public function verificarLogin($email, $username, $password);

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getDataNasc() {
        return $this->dataNasc;
    }

    public function getMorada() {
        return $this->morada;
    }

    function getPerfil() {
        return $this->perfil;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function setDataNasc($dataNasc): void {
        $this->dataNasc = $dataNasc;
    }

    public function setMorada($morada): void {
        $this->morada = $morada;
    }

    function setPerfil($perfil): void {
        $this->perfil = $perfil;
    }
}