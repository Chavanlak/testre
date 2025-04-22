<?php

namespace App\Http\Controllers;

use App\Repository\UserRepository;
use App\Repository\UserTypeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // public static function register(){
    //     $userType = UserTypeRepository::getallUserType();
    //     return view('register', compact('usertypes'));
    // }
    public static function registerPost(Request $request){
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $department = $request->department;
        $phone = $request->phone;
       
        UserRepository::save(
            $firstname,
            $lastname,
            $username,
            $email,
            $password,
            $department,
            $phone
        );
        return redirect('/register')->with('success', 'Registration successful. Please login.');

    }
    public static function login(){
        return view('login');
    }
    // public static function loginPost(Request $request){
    //     $email = $request->email;
    //     $password = $request->password;
    //     if (Auth::attempt(['email' => $email, 'password' => $password])) {
    //         return redirect('/')->with('success', 'Login successful.');
    //     } else {
    //         return redirect('/login')->with('error', 'Invalid credentials.');
    //     }
    // }
    public static function loginPost(Request $request){
       $credentials =[
        'username' => $request->username,
        'password' => $request->password
       ];
         if (Auth::attempt($credentials)) {
                return redirect('/')->with('success', 'Login successful.');
          } else {
                return redirect('/login')->with('error', 'Invalid credentials.');
          }
    }
    public static function home(){
        if(Auth::user()->user_type == 1){
            return view('/admin/dashbord');
    }
    else if(Auth::user()->user_type == 2){
        return view('/user/dashbord');
    }
   
}
    public static function logout(){
        Auth::logout();
        return redirect('/login')->with('success', 'Logout successful.');
    }
    
}
