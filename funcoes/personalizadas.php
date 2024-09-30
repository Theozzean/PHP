<?php

function somar($valor1, $valor2)
{
      echo "<br>";         
      return $valor1 + $valor2;
      //echo "Depois do return"; depois do return não é chamado.
}

$soma = somar(12, 10);

echo $soma . '<br>';

$soma2 = somar(120, 10);

echo $soma2 . '<br>';

echo somar(13, 90);