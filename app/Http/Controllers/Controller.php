<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Laravel Restful APIs",
     *      description="Web Dev Workshop",
     *      @OA\Contact(
     *          email="saad-amjad@monstar-lab.com"
     *      ),
     *      @OA\License(
     *          name="Apache 2.0",
     *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
     *      ),
     * )
     * @OAS\SecurityScheme(
     *      securityScheme="bearer_token",
     *      type="http",
     *      scheme="bearer"
     * )
     * @OA\Tag(
     *     name="Books",
     *     description="API Endpoints of Books"
     * )
     */
}
