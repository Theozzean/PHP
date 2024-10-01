<?php

require_once "poo-classes/pessoal.php";

$pessoa = new Pessoa;
$pessoa->idade = 35;
$pessoa->nome = "Marcelo";
$pessoa->email = "theozzean@gmail.com";
echo $pessoa->dados();