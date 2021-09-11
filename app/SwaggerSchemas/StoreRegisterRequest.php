<?php

namespace App\SwaggerSchemas;

/**
 * @OA\Schema(
 *     title="Store Register Request",
 *      description="Store register request body data",
 *      type="object",
 *      required={"name", "email", "password"}
 * )
 */
class StoreRegisterRequest
{

    /**
     * @OA\Property(
     *      title="name",
     *      description="Name of the new user",
     *      example="Saad Bin Amjad"
     * )
     *
     * @var string
     */
    public $name;

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
