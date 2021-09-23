<?php

namespace App\Http\Repository\Constracts;

interface LoginRegistrationContract
{
    public function requestUserCheck($email);
    public function storeUserInfo($email);

}
