<?php

namespace App\SwaggerSchemas;

/**
 * @OA\Schema(
 *     title="Register Response",
 *     description="Register Response",
 *     @OA\Xml(
 *         name="RegisterResponse"
 *     )
 * )
 */
class RegisterResponse
{

    /**
     * @OA\Property(
     *     title="accessToken",
     *     description="ID",
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
