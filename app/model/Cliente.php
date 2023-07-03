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

    public function __construct($id, $nome, $email, $senha, $dataNasc, $morada, $perfil, $localizacao) {
        parent::__construct($id, $nome, $email, $senha, $dataNasc, $morada, $perfil);
        $this->localizacao = $localizacao;
    }

}
