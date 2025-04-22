<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
//     public static function register(){
//     return view('register');
// }
//     // public static function getall(){
//     //     $userList = UserRepository::getall();
//     //     return $userList;
//     //  }
    
//     public static function registerPost(Request $request){
//         $validated = $request->validate([
//             'firstname' => 'required|string|max:255',
//             'lastname' => 'required|string|max:255',
//             // 'email' => 'required|email|unique:user,email',
//             'email' => 'required|email',
//             'department' => 'required|max:255',
//             // 'username' => 'required|string|max:255|unique:user,username',
//             'username' => 'required|string|max:255|',
//             'password' => 'required|min:6|confirmed', // password_confirmation ถูกตรวจสอบที่นี่
//             'phone' => 'required|max:15',
//         ]);
//         $userList = UserRepository::save(
//             $validated['firstname'],
//             $validated['lastname'],
//             $validated['username'],
//             $validated['email'],
//             bcrypt($validated['password']), // Encrypt password
//             $validated['department'] ?? '',
//             $validated['phone'] 
          
//         );
//         Auth::login($userList);
//       return redirect()->route('register')->with('success', 'ลงทะเบียนสำเร็จ!');
//         // return view('register', [
//         //     'userList' => $userList
//         // ])->with('success', 'Registration successful. Please login.');
    
//         // $userList = UserRepository::save(
//         //     'firstname',
//         //     'lastname',
//         //     'username',
//         //     'email',
//         //     'password',
//         //     'department',
//         //     'phone'
//         // );
      

//         // return view('/register',compact('userList'))->with('success', 'ลงทะเบียนสำเร็จ!');  
//         // return view('register', ['userList' => $userList])->with('success', ' ลงทะเบียนสำเร็จ!');
//     }
//     public static function login(){
//         return view('login');
//     }
//     public static function loginPost(Request $request){
//         // $credentials = $request->only('username', 'password');
//         // if (Auth::attempt($credentials)) {
//         //     return redirect('/login')->with('success', 'Login successful.');
//         // } else {
//         //     return redirect('/login')->with('error', 'Invalid credentials.');
//         // }
//         $validated = $request->validate([
//             'username' => 'required|string',
//             'password' => 'required|min:8',
//         ]);

//         $credentials = $request->only('username', 'password');

//         if (Auth::attempt($credentials)) {
//             return redirect('/')->with('success', 'Login successful.');
//         }

//         return redirect('/login')->with('error', 'Invalid credentials.');
//         // return redirect('login');
      
//     }
//     public static function loginRecipe(){
//         return view('loginRecipe');
//         // return view('/Recipe');
        
//     }
//     // public static function loginPostRecipe(Request $request){
//     //     // $credentials = [
//     //     //     'username' => $request->username,
//     //     //     'password' => $request->password,
//     //     // ];
        
//     // $credentials = $request->only('username', 'password');
//     //     if(Auth::attempt($credentials)) {
//     //         $request->session()->regenerate();
//     //         dd(Auth::user());
//     //         return redirect('/recipe');
//     //     }
//     //     return redirect('/loginRecipe')->with('error', 'Invalid credentials.');
//     //     }
//     public static function loginPostRecipe(Request $request){
//         $credentials = $request->only('username', 'password');
    
//         if (Auth::attempt($credentials)) {
//             $request->session()->regenerate();
//             // ถ้า login สำเร็จ ให้ redirect ไปหน้า recipe
//             return redirect('/recipe');
//         }
    
//         // Debug เพิ่มดูว่า username กับ password ได้ค่าถูกไหม
//         $user = \App\Models\User::where('username', $credentials['username'])->first();
//         if ($user) {
//             return back()->with('error', 'พบ username แต่ password ไม่ถูกต้อง');
//         }
    
//         return back()->with('error', 'ไม่พบ username นี้ในระบบ');
//     }
}
