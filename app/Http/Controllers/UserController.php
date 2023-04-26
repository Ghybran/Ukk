<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $user= User::all();
        return view('ok',compact('user'));
    }
    public function create()
    {
        $user =new User([
            'id'=>request('id'),
            'name'=>request('name'),
            'password'=>request('password'),
            'email'=>request('email'),
            'role'=>request('role'),

        ]);
        $user->save();
        return redirect('ok');
    }

}
