<?php

namespace App\Http\Service;

use App\Http\Repository\Constracts\LoginRegistrationContract;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\UnauthorizedException;
use mysql_xdevapi\Exception;

class LoginRegistrationService
{
    protected $loginRegistrationContract;

    public function __construct(LoginRegistrationContract $loginRegistrationContract)
    {
        $this->loginRegistrationContract = $loginRegistrationContract;
    }

    /**
     * @param $user
     * @param $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function requestUserInsert($user, $data)
    {
        if ($user) {
            // it should not bad reequest exception. it should return existing user exception
            //return response()->json(null, Response::HTTP_BAD_REQUEST);
        }
        try {
            $user = $this->loginRegistrationContract->storeUserInfo($data);
            return $user->createToken('auth_token')->plainTextToken;
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }


    }

    public function checkUserExistance($user,$requestData){

        if ($user && !Hash::check($requestData['password'], $requestData['password'])) {
           throw new UnauthorizedException();
        }
        return $user->createToken('auth_token')->plainTextToken;
    }


}
