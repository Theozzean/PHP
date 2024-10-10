<?php

namespace src\classes;

class Login
{
    // public string $email;
    // public string $password;

    public function auth(string $email, string $password): string | int
    {
        return 'O meu email é ' . $email .' e minha senha é '. $password;
    }
}