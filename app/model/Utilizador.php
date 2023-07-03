<?php
abstract class Utilizador{
    protected $id;
    protected $nome;
    protected $email;
    protected $senha;
    protected $morada;
    protected $tipoVeiculo;
    protected $dataNasc;
    protected $empresa;

    public function __construct($id, $nome, $email, $senha, $dataNasc, $morada, $tipoVeiculo, $empresa) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->dataNasc = $dataNasc;
        $this->morada = $morada;
        $this->tipoVeiculo = $tipoVeiculo;
        $this->empresa = $empresa;
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

    function getTipoVeiculo() {
        return $this->tipoVeiculo;
    }
    
    public function getEmpresa() {
        return $this->empresa;
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

    function setTipoVeiculo($perfil): void {
        $this->tipoVeiculo = $perfil;
    }
    
    public function setEmpresa($empresa): void {
        $this->empresa = $empresa;
    }
}