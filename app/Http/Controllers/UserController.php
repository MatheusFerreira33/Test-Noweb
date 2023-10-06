<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\CreateUserService;
use Error;

class UserController extends Controller{
    public function create(Request $request){
        $createUser = new CreateUserService();

        return $createUser->execute($request->all());
    }

    public function update(Request $request, $id){

        if (!auth()->check()) {
            throw new Error('Sem autorização');
        }
        
            $user = User::find($id);
        
            if (!$user) {
                throw new Error('usuario não existe');
            }
        
           
        
            $user->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
             
            ]);
        
            return response()->json(['message' => 'Usuário atualizado com sucesso']);

    }

    public function destroy($id){
        
        if (!auth()->check()) {
            throw new Error('Sem autorização');
        }
        
            $user = User::findOrFail($id);
        
            $user->delete();
        
            return response()->json(['message' => 'Usuário excluído com sucesso']);

    }

}

