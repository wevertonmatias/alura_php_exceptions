<?php

function func1()
{
    echo 'Entrei função 1'.PHP_EOL;

    try{
        func2();
    }catch(RuntimeException | DivisionByZeroError $error){
        echo 'Na função 1 resolvi o erro da função 2.'.PHP_EOL;
        echo $error->getMessage() . PHP_EOL;
        echo $error->getLine() . PHP_EOL;
        echo $error->getTraceAsString();
    }/*catch(DivisionByZeroError $error){
        echo 'Erro ao dividir por zero' . PHP_EOL;
    }*/
    echo 'Saí função 1'.PHP_EOL;
}

function func2()
{
    $newArray = new SplFixedArray(2);
    $newArray[3] = 10;
    $valor = intdiv(5, 0);
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
