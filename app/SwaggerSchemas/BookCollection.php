<?php

/**
 * @OA\Schema(
 *     title="Book Collection",
 *     description="Book Collection",
 *     @OA\Xml(
 *         name="BookCollection"
 *     )
 * )
 */
class BookCollection
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\SwaggerSchemas\BookResource[]
     */
    private $data;
}
