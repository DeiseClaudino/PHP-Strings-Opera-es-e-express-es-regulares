<?php

namespace App\Alura;

class Usuario
{
    private $nome;
    private $sobrenome;
    private $senha;
    private $genero;

    public function __construct(string $nome, string $senha, string $genero)
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

        $this->adicionaTratamentoAoSobrenome($nome, $genero);
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
        if(strlen(trim($senha)) > 6)
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

    function adicionaTratamentoAoSobrenome(string $nome, string $genero)
    {
        if($genero === 'M')
        {
            $this->tratamento = preg_replace('/^(\w+)\b/', 'Sr.', $nome, 1);
        }
        else
        {
            $this->tratamento = preg_replace('/^(\w+)\b/', 'Sra.', $nome, 1);
        }
    }

    function getTratamento(): string
    {
        return $this->tratamento;
    }
}