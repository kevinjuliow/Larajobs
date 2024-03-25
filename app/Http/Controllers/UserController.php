<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show Register Form
    public function create () {
        return view("users.registerPage");
    }

    public function store (Request $request) {
        $formFields = $request->validate([
            'name'=> ['required' , 'min:3'], 
            'email'=> ['required', 'email','unique:users'] ,
            'password' => ['required' , 'confirmed']
        ]);

        //hash password
        $formFields['password'] = bcrypt($formFields['password']);
        
        //Create User
        $user = User::create($formFields);

        //login
        auth()->login($user);

        return redirect('/')->with('message','User Created and logged in');
    }
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken(); 

        return redirect('/')->with('message','User Logged Out');
    }
}
