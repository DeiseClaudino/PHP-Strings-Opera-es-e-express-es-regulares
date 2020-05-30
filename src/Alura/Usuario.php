<?php

namespace App\Alura;

class Usuario
{
    private $nome;
    private $sobrenome;

    public function __construct(string $nome)
    {
        $nomeSobrenome      = explode(" ", $_POST['nome'], 2);

        if($nomeSobrenome[0] === "")
        {
            $this->nome = "Nome Inválido";
        }
        else
        {
            $this->nome         = $nomeSobrenome[0];
        }

        if($nomeSobrenome[1] == null)
        {
            $this->sobrenome = "Sobrenome Inválido";
        }
        else
        {
            $this->sobrenome    = $nomeSobrenome[1];
        }
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