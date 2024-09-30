<?php

$peso1 = floatval(fgets(STDIN));
$peso2 = floatval(fgets(STDIN));

$media = ($peso1 * 3.5 + $peso2 * 7.5) / 11;


echo "MEDIA = " . number_format( $media, 5, ".", '');