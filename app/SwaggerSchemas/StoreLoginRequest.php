<?php

namespace App\SwaggerSchemas;

/**
 * @OA\Schema(
 *     title="Store Login Request",
 *      description="Store login request body data",
 *      type="object",
 *      required={"email", "password"}
 * )
 */
class StoreLoginRequest
{

    /**
     * @OA\Property(
     *      title="email",
     *      description="Email of user",
     *      example="saad.amjad@monstar-lab.com"
     * )
     *
     * @var string
     */
     public $email;
    /**
     * @OA\Property(
     *      title="password",
     *      description="password",
     *      example="#@asdf342f"
     * )
     *
     * @var string
     */
    public $password;
}
