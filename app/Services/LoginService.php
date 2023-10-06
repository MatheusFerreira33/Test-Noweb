<?php

namespace App\Services;

use App\Models\User;
use Error;

class LoginService{
    public function execute(array $data){

        if(!$token = auth()->attempt($data)){
            throw new Error('Email ou senha incorretos');
        }

        return $this->createNewToken($token);
    }

    private function createNewToken($token){
        return response()->json([
            'token'=>$token
        ]);
    }

}