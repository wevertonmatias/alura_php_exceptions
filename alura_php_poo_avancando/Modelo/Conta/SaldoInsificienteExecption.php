<?php

namespace Alura\Banco\Modelo\Conta;

Class SaldoInsificienteExecption extends \DomainException
{
    public function __construct($valorSque, $saldoConta )
    {
        $message = "Você tentou sacar {$valorSque} porém você possui apenas {$saldoConta}.";

        return parent::__construct($message);
    }
}