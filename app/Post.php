<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *  @OA\Property(
 *      property="id",
 *      type="integer"
 *  ),
 *  @OA\Property(
 *      property="title",
 *      type="string"
 *  ),
 *  @OA\Property(
 *      property="text",
 *      type="string"
 *  )
 * )
 */
class Post extends Model
{
    //
}
