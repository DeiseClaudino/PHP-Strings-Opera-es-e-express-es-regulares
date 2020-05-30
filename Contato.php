<?php

namespace Alura;

class Contato 
{
    private $email;

    function __construct($email)
    {
        $this->email = $email;        
    }

    function getUsuario(): string
    {
        $posicaoArroba = strpos($this->email, '@');
        if($posicaoArroba === false)
        {
            return "Usuário Inválido";
        }

        return substr($this->email, 0, $posicaoArroba);
    }
}