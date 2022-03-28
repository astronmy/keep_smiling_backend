<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends APIController
{
    public function login(Request $request){
        
        $data = json_decode($request->getContent());

        if(!(Auth::attempt(['email' => $data->email, 'password' => $data->password]))){ 
            return $this->error(10, "Unauthorized", 400);
        } 
        $user = Auth::user(); 
        $success['token'] =  $user->createToken('KeepSmiling')-> accessToken; 
        return $this->response($success);
    }
}
