<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\HttpResponses;


class AuthController extends Controller
{
    use HttpResponses;

    public function login(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))) {
            return $this->response('Authorized', 200, [
                'token' => $request->user()->createToken('invoice', ['invoice-store', 'invoice-update'])->plainTextToken
            ]);
        }
        return $this->response('Not Authorized', 403);
    }

    public function logout()
    {

    }
}
