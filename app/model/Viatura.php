<?php

class Viatura
{

    private $idViatura;
    private $idMotorista;
    private $idEmpresa;
    private $idTipo;
    private $disponivel;
    private $localizacao;
    private $factorFiabilidade;

    function getIdViatura()
    {
        return $this->idViatura;
    }

    function getIdMotorista()
    {
        return $this->idMotorista;
    }

    function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    function getIdTipo()
    {
        return $this->idTipo;
    }

    function getDisponivel()
    {
        return $this->disponivel;
    }

    function getLocalizacao()
    {
        return $this->localizacao;
    }

    function getCFactorFiabilidade()
    {
        return $this->factorFiabilidade;
    }

    function setIdMotorista($idMotorista): void
    {
        $this->idMotorista = $idMotorista;
    }

    function setIdEmpresa($idEmpresa): void
    {
        $this->idEmpresa = $idEmpresa;
    }

    function setIdTipo($idTipo): void
    {
        $this->idTipo = $idTipo;
    }

    function setDisponivel($disponivel): void
    {
        $this->disponivel = $disponivel;
    }

    function setLocalizacao($localizacao): void
    {
        $this->localizacao = $localizacao;
    }

    function setFactorFiabilidade($factorFiabilidade): void
    {
        $this->factorFiabilidade = $factorFiabilidade;
    }

    function __construct($idViatura, $idMotorista, $idEmpresa, $idTipo, $disponivel, $factorFiabilidade, $localizacao)
    {
        $this->idViatura = $idViatura;
        $this->idMotorista = $idMotorista;
        $this->idEmpresa = $idEmpresa;
        $this->idTipo = $idTipo;
        $this->disponivel = $disponivel;
        $this->localizacao = $localizacao;
        $this->factorFiabilidade = $factorFiabilidade;
    }

}