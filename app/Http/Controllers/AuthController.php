<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Register
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request): JsonResponse
    {
        $data = $request->validate([
           'name' => 'required|string',
           'email' => 'required|email',
           'password' => 'required',
        ]);

        /* @var \App\Models\User $user */
        $user = User::where('email', $request->email)->first();

        if ($user) {
            return response()->json(null, Response::HTTP_BAD_REQUEST);
        }

        $user = User::create([
             'name' => $data['name'],
             'email' => $data['email'],
             'password' => Hash::make($data['password']),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    /**
     * Login
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        $request->validate([
           'email' => 'required|email',
           'password' => 'required',
        ]);

        /* @var \App\Models\User $user */
        $user = User::where('email', $request->email)->first();

        if ($user && !Hash::check($request->password, $user->password)) {
            response()->json(null, Response::HTTP_UNAUTHORIZED);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
}
