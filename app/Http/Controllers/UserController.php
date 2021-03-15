<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
@OA\PathItem(
path="/products/{product_id}",
@OA\Parameter(ref="#/components/parameters/product_id_in_path_required")
)
*/
class UserController extends Controller
{
    /**
     * Combine firstname and lastname
     *
     * @param Request $request
     * @return Response|string
     * @OA\PathItem(
     *     path="/create",
     *     @OA\Parameter(ref="#/components/parameters/product_id_in_path_required")
     * )
     *
     * @SWG\Get(
     *     path="/create",
     *     description="Return a user's first and last name",
     *     @SWG\Parameter(
     *         name="firstname",
     *         in="query",
     *         type="string",
     *         description="Your first name",
     *         required=true,
     *     ),
     *     @SWG\Parameter(
     *         name="lastname",
     *         in="query",
     *         type="string",
     *         description="Your last name",
     *         required=true,
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="OK",
     *     ),
     *     @SWG\Response(
     *         response=422,
     *         description="Missing Data"
     *     )
     * )
     */
    public function create(Request $request)
    {
        $userData = $request->only([
            'firstname',
            'lastname',
        ]);

        if (empty($userData['firstname']) && empty($userData['lastname'])) {
            return new \Exception('Missing data', 404);
        }

        return $userData['firstname'] . ' ' . $userData['lastname'];
    }
}
