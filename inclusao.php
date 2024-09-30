<?php

echo "Inicio do arquivo de inclusao.php <br>";

include "variaveis.php"; //Nao incluir o mesmo arquivo duas ou mais vezes.
include_once "funcoes/personalizadas.php"; //Se incluir um arquivo que tenha uma função ele vai dar fatal error.
//usar o include_once para incluir uma vez apenas

require "variaveis.php"; //Incluir require se o arquivo gerado for de importancia.
//Se der erro ele para a excução.


echo "<br><br>Estou mostrando a variavel nome no arquivo inclusao.php: " . $nome . "<br>";

echo "<br> Fim do arquivo de inclusao.";