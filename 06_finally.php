<?php

function teste()
{
    try {
        echo 'Código ';
        throw new RuntimeException();
        return 0;
    } catch (Throwable $e){
        echo 'Problema ';
        return 1;
    } finally {
        echo 'Final da função';
    }
}

teste();