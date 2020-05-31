<?php

namespace App\Alura;

class Contato 
{
    private $email;

    function __construct(string $email, string $endereco, string $cep)
    {        
        $this->endereco = $endereco;
        $this->cep = $cep;

        if($this->validaEmail($email) !== false)
        {
            $this->setEmail($email);
        }
        else
        {
            $this->setEmail("E-mail Inválido");
        }
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

    function getEmail()
    {
        return $this->email;
    }

    private function validaEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }


    function setEmail(string $email): void
    {
        $this->email = $email;
    }

    function getEnderecoCep(): string
    {
        $endereco_cep =  [$this->endereco, $this->cep];
        return implode(' - ', $endereco_cep);
    }
}