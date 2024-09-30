<?php

$escola = "Treinaweb";
$curso = "PHP";

$frase = "Faça o curso de " . $curso . " na escola " . $escola;

$string1 = "Faça o curso de {$curso} na escola {$escola}"; //string com aspas duplas procura variaveis
$string2 = 'Faça o curso de $curso na escola $escola'; //string com uma unica entende tudo como texto.

echo $string1;
echo "<br>";
echo $string2;