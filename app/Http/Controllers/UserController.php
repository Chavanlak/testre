<?php

namespace App\Http\Controllers;

use App\Repository\UserRepository;


use Illuminate\Http\Request;

class UserController extends Controller
{
public static function register(){
    return view('register');
}
    // public static function getall(){
    //     $userList = UserRepository::getall();
    //     return $userList;
    //  }
    
    public static function registerPost(){
        $userList = UserRepository::save(
            'firstname',
            'lastname',
            'username',
            'email',
            'password',
            'department',
            'phone'
        );
        return view('/register', ['userList' => $userList]);
    }
}
// public function register(Request $request)
// {
//     $validatedData = $request->validate([
//         'name' => 'required|string|max:255',
//         'email' => 'required|string|email|max:255|unique:users',
//         'password' => 'required|string|min:8|confirmed',
//     ]);

//     $user = UserRepository::create([
//         'name' => $validatedData['name'],
//         'email' => $validatedData['email'],
//         'password' => bcrypt($validatedData['password']),
//     ]);

//     return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
// }