<?php

error_reporting(E_ALL);

$divisor = 2;

try 
{
    if($divisor == 0)
    {
        throw new Exception("Todo número dividido por 0 é 0, por gentileza, defina um número maior que 0", 1);
    }

    $valor = 100 / $divisor;

    echo "100 divido por " . $divisor . " = " . $valor;
} catch (\Throwable $th) 
{
    echo $th->getMessage();
}

