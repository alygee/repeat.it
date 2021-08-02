<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PassportAuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
          'name' => 'required|min:4',
          'email' => 'required|email',
          'password' => 'required|min:8',
        ]);

        $user = User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('LaravelAuthApp')->accessToken;

        return response()->json(['token' => $token], 200);
    }

    /* public function login(Request $request) */
    /* { */
    /* logger(1); */
    /* /1* return response()->json([], 200); *1/ */
    /* $http = new \GuzzleHttp\Client; */

    /* logger(2); */
    /* try { */
    /*     logger(3); */
    /*     dd($http); */
    /*     $response = $http->request('POST', 'http://localhost:8000/oauth/token', [ */
    /*         'form_params' => [ */
    /*             'grant_type' => 'password', */
    /*             'client_id' => 2, */
    /*             'client_secret' => 'niRMlEcp6yAPd6Sku65NlDsw2obKjPiuHbMn94zi', */
    /*             'username' => $request->email, */
    /*             'password' => $request->password, */
    /*         ] */
    /*     ]); */
    /*     logger(5); */
    /*     return $response->getBody(); */
    /* } catch (\GuzzleHttp\Exception\BadResponseException $e) { */
    /*     logger(4); */
    /*     if ($e->getCode() === 400) { */
    /*         return response()->json('Invalid request. Please enter a username or a password', $e->getCode()); */
    /*     } elseif ($e->getCode() === 401) { */
    /*         return response()->json('Your creadentials are incorrect. Please try again', $e->getCode()); */
    /*     } */

    /*     return response()->json('Something went wrong on the server.', $e->getCode()); */
    /* } */
    /* } */

    public function login(Request $request)
    {
        $data = [
          'email' => $request->email,
          'password' => $request->password,
        ];

        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
}
