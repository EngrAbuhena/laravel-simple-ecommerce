<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $request): String
    {
        $user= User::where(['email'=>$request->email])->first();
        if(!$user || !Hash::check($request->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/');
        }
    }

    function register(Request $request): RedirectResponse
    {
        $user = new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->save();
        return redirect('/login');
    }
}
