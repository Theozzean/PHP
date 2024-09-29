<?php

$linguagens = ["PHP", "C#", "Java"]; //array, PHP está na posição 0, o C# na 1 e Java na 2.

$linguagens2 = array("PHP", "C#", "Java"); //modo declara arrays antigos.

$curso1 = ["Curso de PHP Fundamentos", 7.4, 40, true];

$curso2 = [
   "nome_curso" => "Curso de PHP Fundamentos",
   "versao_ferramenta" => 7.4,
   "carga_horaria" => 40,
   "status" => true
]; //definindo chaves para acessar as posições do array.

// echo $curso2["nome_curso"];
// echo "<br>";
// echo $curso2["versao_ferramenta"];
// echo "<br>";
// echo $curso2["carga_horaria"];
// echo "<br>";
// echo $curso2["status"];
// echo "<br>";

$numeros =[
    [1,2,3,4],
    [5,6,7,8],
    [10,[11,12,13]], //um array dentro do array 0_0
];

//echo $numeros[0][2]; //o primeiro valor é a linha e o segundo valor é a posição
//echo "<br>";
//echo $numeros[2][1][2]; /*o primeiro valor é a linha, o segundo valor escolhemos a posição dentro dessa linha e como a posição dentro da linha é outro array o terceiro valor é a posição*/

$cursos = [
    "php"=> [
        "nome_curso" => "Curso de PHP Fundamentos",
        "versao_ferramenta" => 7.4,
        "carga_horaria" => 40,
        "status" => true
     ],
     "java"=> [
        "nome_curso" => "Curso de Java Fundamentos",
        "versao_ferramenta" => 11.4,
        "carga_horaria" => 40,
        "status" => false
     ],    
    ];

    echo $cursos["php"]["nome_curso"];
    echo "<br>";
    echo $cursos["java"]["nome_curso"];