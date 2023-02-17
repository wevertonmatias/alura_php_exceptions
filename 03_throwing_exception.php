<?php


function func1()
{
    echo 'Entrei função 1' . PHP_EOL;

    try {
        func2();
    } catch (RuntimeException|DivisionByZeroError $error) {
        echo 'Na função 1 resolvi o erro da função 2.' . PHP_EOL;
        echo $error->getMessage() . PHP_EOL;
        echo $error->getLine() . PHP_EOL;
        echo $error->getTraceAsString();

        throw new RuntimeException(
    'Tratei mas pega ai novamente',
            1,
            $error);
    }
    echo 'Saí função 1' . PHP_EOL;
}

function func2()
{
    echo 'Entrei função 2' . PHP_EOL;
    throw new RuntimeException();
    echo 'Saí função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
func1();
echo 'Finalizando o programa principal' . PHP_EOL;
