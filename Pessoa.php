<?php

class Pessoa
{

    private $id;
    private $nome;
    private $end; //associação entre pessoa e endereço;

    public function __construct($id, $nome, Endereco $end)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->end = $end;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEndereco()
    {
        return $this->end;
    }

    public function setEndereco($end)
    {
        $this->end = $end;
    }
}
