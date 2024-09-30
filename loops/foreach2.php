<?php

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
        "carga_horaria" => 30,
        "status" => false
     ],
     "C#"=> [
        "nome_curso" => "Curso de C# Fundamentos",
        "versao_ferramenta" => 5,
        "carga_horaria" => 60,
        "status" => true
     ],  
    ];

    foreach ($cursos as $curso) {

        if($curso['status'] == false) {
            break;
        }

        echo $curso['nome_curso'] . '<br>';
        echo 'Versao da ferramenta:' . $curso['versao_ferramenta'] . '<br>';
        echo 'Carga horaria:' . $curso['carga_horaria'] . '<br>';
        echo 'Status:' . $curso['status'] . '<br>' . '<br>';
    }