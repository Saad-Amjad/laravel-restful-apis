<?php

namespace App\SwaggerSchemas;

/**
 * @OA\Schema(
 *     title="Login Response",
 *     description="Login Response",
 *     @OA\Xml(
 *         name="LoginResponse"
 *     )
 * )
 */
class LoginResponse
{

    /**
     * @OA\Property(
     *     title="accessToken",
     *     description="Access Token",
     *     example= "4|IZ95yiIqqCVsfT2rmWnnxbAwhlO2zz2Mz3dstUw8"
     * )
     *
     * @var string
     */
    private $access_token;

    /**
     * @OA\Property(
     *      title="Token Type",
     *      description="Type of Token",
     *      example="Bearer"
     * )
     *
     * @var string
     */
    public $token_type;
}
