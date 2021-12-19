<?php

class Endereco
{

    private $bairro;
    private $cidade;
    private $logradouro;
    private $estado_info;
    private $cep;
    private $estado;

    public function __construct($bairro, $cidade, $logradouro, $estado_info, $cep,  $estado)
    {
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->logradouro = $logradouro;
        $this->estado_info = $estado_info;
        $this->cep = $cep;
        $this->estado = $estado;
    }

    public function getBairro()
    {
        return $this->bairro;
    }
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    public function getCidade()
    {
        return $this->cidade;
    }
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function getLogradouro()
    {
        return $this->logradouro;
    }
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    public function getEstadoInfo()
    {
        return $this->estado_info;
    }
    public function setEstadoInfo($estado_info)
    {
        $this->estado_info = $estado_info;
    }

    public function getCep()
    {
        return $this->cep;
    }
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
}
