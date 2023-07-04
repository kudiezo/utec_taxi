<?php
require_once 'Utilizador.php';
class Motorista extends Utilizador {

    private $disponivel;
    private $classificacao;

    function getDisponivel() {
        return $this->disponivel;
    }

    function getClassificacao() {
        return $this->classificacao;
    }

    function setDisponivel($disponivel): void {
        $this->disponivel = $disponivel;
    }

    function setClassificacao($classificacao): void {
        $this->classificacao = $classificacao;
    }

    public function __construct($id, $nome, $email, $senha, $dataNasc, $morada, $tipoVeiculo, $empresa, $disponivel, $classificacao) {
        parent::__construct($id, $nome, $email, $senha, $dataNasc, $morada, $tipoVeiculo, $empresa);
        $this->disponivel = $disponivel;
        $this->classificacao = $classificacao;
    }

}
