<?php

$pi= 3.14159;
$raio = trim(fgets(STDIN));
$area = $pi * $raio ** 2;

echo "A=" . number_format($area, 4, ".", '');

