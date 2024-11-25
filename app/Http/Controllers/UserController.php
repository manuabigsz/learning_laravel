<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(1);


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

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3',
            'avatar' => 'file',
        ]);
        if (!empty($input['avatar']) && $input['avatar']->isValid()) {
            $url = $input['avatar']->store();
            dd($url);
        }
        User::create($input);

        return redirect()->back();
    }
}
