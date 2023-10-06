<?php

namespace App\Services;

use App\Models\User;
use Error;

class CreateUserService{
    public function execute(array $data){
        $findUser = User::firstWhere('email',$data['email']);

        if(!is_null($findUser)){
            throw new Error('Email ja existe');
        }

        return User::create($data);
    }
}