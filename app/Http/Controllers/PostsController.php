<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/posts",
     *     summary="Get list of blog posts",
     *     tags={"Posts"},
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Post")
     *         ),
     *     ),
     *     @OA\Response(
     *         response="401",
     *         description="Unauthorized user",
     *     ),
     * )
     */
    public function index() {}

    /**
     * @OA\Get(
     *     path="/posts/{post_id}",
     *     summary="Get blog post by id",
     *     tags={"Posts"},
     *     description="Get blog post by id",
     *     @OA\Parameter(
     *         name="post_id",
     *         in="path",
     *         required=true,
     *         description="Post id",
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\Schema(ref="#/components/schemas/Post"),
     *     ),
     *     @OA\Response(
     *         response="401",
     *         description="Unauthorized user",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Post is not found",
     *     )
     * )
     */
    public function show($id) {}
}
