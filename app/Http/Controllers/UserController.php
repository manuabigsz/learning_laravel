<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        //regras de negócio
        //variaveis e conteúdos -> view
        return view('users.index', [
            'greeting' => "Hello world!",
            'users' => $users
        ], );

    }

    public function getUser(User $user)
    {

        return view("users.show", ['user' => $user,]);
    }
}
