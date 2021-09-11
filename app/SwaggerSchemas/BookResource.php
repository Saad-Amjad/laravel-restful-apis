<?php

namespace App\SwaggerSchemas;

/**
 * @OA\Schema(
 *     title="Book Resource",
 *     description="Book resource",
 *     @OA\Xml(
 *         name="BookResource"
 *     )
 * )
 */
class BookResource
{

    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */
    private $id;

    /**
     * @OA\Property(
     *      title="Title",
     *      description="Name of the new book",
     *      example="Sample Book"
     * )
     *
     * @var string
     */
    public $title;

    /**
     * @OA\Property(
     *     title="Created at",
     *     description="Created at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $created_at;

    /**
     * @OA\Property(
     *     title="Updated at",
     *     description="Updated at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @OA\Property(
     *      title="Author ID",
     *      description="Author's id of the new book",
     *      format="int64",
     *      example=1
     * )
     *
     * @var integer
     */
    public $author_id;
}
