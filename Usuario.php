<?php

namespace Alura;

class Usuario
{
    private $nome;
    private $sobrenome;

    public function __construct(string $nome)
    {
        $nomeSobrenome      = explode(" ", $_POST['nome'], 2);
        $this->nome         = $nomeSobrenome[0];
        $this->sobrenome    = $nomeSobrenome[1];
    }


    function getNome(): string
    {
        return $this->nome;
    }


    function getSobrenome(): string
    {
        return $this->sobrenome;
    }

}