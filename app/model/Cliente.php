<?php
require_once 'Utilizador.php';
class Cliente extends Utilizador {

    private $localizacao;

    function getLocalizacao() {
        return $this->localizacao;
    }

    function setLocalizacao($localizacao): void {
        $this->localizacao = $localizacao;
    }

    public function __construct($id, $nome, $email, $senha, $dataNasc, $morada, $tipoVeiculo, $empresa, $localizacao) {
        parent::__construct($id, $nome, $email, $senha, $dataNasc, $morada, $tipoVeiculo, $empresa);
        $this->localizacao = $localizacao;
    }

}
