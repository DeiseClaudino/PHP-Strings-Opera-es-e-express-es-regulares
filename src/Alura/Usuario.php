<?php

namespace App\Alura;

class Usuario
{
    private $nome;
    private $sobrenome;
    private $senha;

    public function __construct(string $nome, string $senha)
    {
        $nomeSobrenome = explode(" ", $nome, 2);
        $this->validaSenha($senha);

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

    function getSenha()
    {
        return $this->senha;
    }

    private function validaSenha($senha) : void
    {
        $tamanhoSenha = strlen($senha);

        if($tamanhoSenha > 6)
        {
            $this->setSenha($senha);
        }
        else
        {
            $this->setSenha("Senha Inválida");
        }
    }

    function setSenha($senha)
    {
        $this->senha = $senha;
    }
}