<?php


class Caracteristicas{
    private $nome;
    private $valor;

    public function __construct(string $nome, string $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getValor()
    {
        return $this->valor;
    }


}