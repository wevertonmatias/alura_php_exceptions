<?php


use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
                    new Titular(
                        'Weverton Matias',
                        new Cpf('123.456.789-10'),
                        new Endereco('Cidade', 'Bairro', 'Rua', '321')
                    )
                );

try {
    $contaCorrente->depositar(-100);
}catch (InvalidArgumentException $e){
    echo "Valor precisa ser positivo. Espertinho!";
}
