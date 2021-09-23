<?php

namespace App\Http\Controllers;

use App\Http\Repository\Constracts\LoginRegistrationContract;
use App\Http\Requests\RegistrationFormValidationRequest;
use App\Http\Service\LoginRegistrationService;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * @OA\Post(
     *      path="/api/v1/register",
     *      operationId="register",
     *      tags={"Register"},
     *      summary="Register user",
     *      description="Registers user in the system",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/StoreRegisterRequest")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/RegisterResponse")
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *     )
     *
     */

    protected $loginRegistrationContract;
    protected $loginRegistrationService;

    /**
     * @param LoginRegistrationContract $loginRegistrationContract
     * @param LoginRegistrationService $loginRegistrationService
     */
    public function __construct(LoginRegistrationContract $loginRegistrationContract, LoginRegistrationService $loginRegistrationService)
    {
        $this->loginRegistrationContract = $loginRegistrationContract;
        $this->loginRegistrationService = $loginRegistrationService;
    }

    /*
    * Register
     *
     * @return \Illuminate\Http\JsonResponse
     * make the validation outside the controller
     */
    public function register(RegistrationFormValidationRequest $request): JsonResponse
    {
        $user =  $this->loginRegistrationContract->requestUserCheck($request->email);
        $token = $this->loginRegistrationService->requestUserInsert($user,$request->all());
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    /**
     * @OA\Post(
     *      path="/api/v1/login",
     *      operationId="login",
     *      tags={"Login"},
     *      summary="Login user",
     *      description="Logins user in the system",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/StoreLoginRequest")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/LoginResponse")
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *     )
     *
     */
     /**
     * Login
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        $user =  $this->loginRegistrationContract->requestUserCheck($request->email);
        $token = $this->loginRegistrationContract->checkUserExistance($user,$request->all());
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
}
