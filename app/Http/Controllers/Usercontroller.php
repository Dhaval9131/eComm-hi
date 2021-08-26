<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Hash;

class Usercontroller extends Controller
{
    //
    function login(Request $req){
        $users= user::where(['email'=>$req->email])->first();
        if(!$users || !Hash::check($req->password,$users->password)){


            return 'username or password is not match';
        }
        else{
            $req->session()->put('user',$users);
            return redirect('/');
        }
    }
}
