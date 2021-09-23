<?php

namespace App\Http\Repository\Implementations;
use  App\Http\Repository\Constracts\LoginRegistrationContract;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginRegistrationRepository implements LoginRegistrationContract
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function requestUserCheck($email)
    {
        return  $this->user->where('email', $email)->first();
    }
    public function storeUserInfo($data)
    {
        return $this->user->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
