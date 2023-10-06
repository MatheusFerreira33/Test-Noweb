<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\CreateUserService;

class UserController extends Controller{
    public function create(Request $request){
        $createUser = new CreateUserService();

        return $createUser->execute($request->all());
    }

}

