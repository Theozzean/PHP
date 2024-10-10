<?php

require '../php-oo/vendor/autoload.php';

use src\classes\Login;

$login = new Login;
echo $login->auth('marcelotheodoro230301@gmail.com', '123');

