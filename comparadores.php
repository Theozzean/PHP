<?php

$a = 10;
$b = 20;

var_dump($a == $b); //igual
echo "<br>";
var_dump($a != $b); //diferente
echo "<br>";
var_dump($a <> $b); //diferente
echo "<br>";
var_dump($a < $b); //menor
echo "<br>";
var_dump($a > $b); //maior
echo "<br>";
var_dump($a <= $b); //menor ou igual
echo "<br>";
var_dump($a >= $b); //maior ou igual
echo "<br>";

$d = 10; //int
$e = "10"; //string

var_dump($d == $e); //o comparador com dois igual compara só os valores e faz
echo "<br>";
var_dump($d === $e); //o comparador com três igual compara o valor e também o tipo
echo "<br>";
var_dump($d !== $e); //o comparador com exclamação e dois igual além de comparar os valores verifica também o tipo.