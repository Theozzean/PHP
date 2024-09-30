<?php

$a = 2;

switch ($a) {
    case 0:
         echo "Tenho o valor 0";
         break;
    case 1:
         echo "Tenho o valor 1";
         break;
    case 2:
    case 3:
    case 4:
         echo "Tenho um valor de 2 a 4!";
         break;
    default:
         echo "Tenho outro valor";
         break;
    }