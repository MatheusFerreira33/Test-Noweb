<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\CreateUserService;
use App\Services\LoginService;

class AuthController extends Controller{
    public function login(Request $request){

        $loginService = new LoginService();

        return $loginService->execute($request->all());
    }
}


