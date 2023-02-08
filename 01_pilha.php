<?php

function func1()
{
    echo 'Entrei função 1'.PHP_EOL;
    try {
    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = 'valor';
//    $valor = intdiv(5, 0);
    }catch (RuntimeException $erro){
        echo 'Aconteceu um erro na função 1';
    }
    func2();
    echo 'Saí função 1'.PHP_EOL;
}

function func2()
{
    echo 'Entrei função 2'.PHP_EOL;
    for($i = 0; $i < 5; $i++){
        echo $i .PHP_EOL;
    }
//    var_dump(debug_backtrace());
//    print_r(debug_backtrace());
    echo 'Saí função 2'.PHP_EOL;
}

echo 'Iniciando o programa principal'.PHP_EOL;
func1();
echo 'Finalizando o programa principal'.PHP_EOL;
