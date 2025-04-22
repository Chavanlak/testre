<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repository\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    
    public static function registerPost(Request $request){
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            // 'email' => 'required|email|unique:user,email',
            'email' => 'required|email',
            'department' => 'required|max:255',
            // 'username' => 'required|string|max:255|unique:user,username',
            'username' => 'required|string|max:255|',
            'password' => 'required|min:6|confirmed', // password_confirmation ถูกตรวจสอบที่นี่
            'phone' => 'required|max:15',
        ]);
        $userList = UserRepository::save(
            $validated['firstname'],
            $validated['lastname'],
            $validated['username'],
            $validated['email'],
            bcrypt($validated['password']), // Encrypt password
            $validated['department'] ?? '',
            $validated['phone'] 
          
        );
        Auth::login($userList);
      return redirect()->route('register')->with('success', 'ลงทะเบียนสำเร็จ!');
        // return view('register', [
        //     'userList' => $userList
        // ])->with('success', 'Registration successful. Please login.');
    
        // $userList = UserRepository::save(
        //     'firstname',
        //     'lastname',
        //     'username',
        //     'email',
        //     'password',
        //     'department',
        //     'phone'
        // );
      

        // return view('/register',compact('userList'))->with('success', 'ลงทะเบียนสำเร็จ!');  
        // return view('register', ['userList' => $userList])->with('success', ' ลงทะเบียนสำเร็จ!');
    }
    public static function login(){
        // return view('login');
        return view('login');
    }
    public static function loginPost(Request $request){
        // $credentials = $request->only('username', 'password');
        // if (Auth::attempt($credentials)) {
        //     return redirect('/login')->with('success', 'Login successful.');
        // } else {
        //     return redirect('/login')->with('error', 'Invalid credentials.');
        // }
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|min:8',
        ]);

        $credentials = $request->only('username', 'password');

        // if (Auth::attempt($credentials)) {
        //     return redirect('/recipe')->with('success', 'Login successful.');
        // }

        return redirect('/')->with('error', 'Invalid credentials.');
        // return redirect('login');
      
    }
    // public static function loginRecipe(){
    //     return view('loginRecipe');
    //     // return view('/Recipe');
        
    // }
    // public static function loginPostRecipe(Request $request){
    //     // $credentials = [
    //     //     'username' => $request->username,
    //     //     'password' => $request->password,
    //     // ];
        
    // $credentials = $request->only('username', 'password');
    // if (Auth::attempt($credentials)) {
    //     $request->session()->regenerate(); // ป้องกัน session fixation
    //     return redirect('/recipe')->with('success', 'เข้าสู่ระบบสำเร็จ');
    // }

    // return redirect('/loginRecipe')->with('error', 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
    //     }
 
      
    
    public static function loginTogetReport(){
        return view('loginTogetReport');
    }
    public static function home(){
        if(Auth::user()->userTypeId == 1){
            return view('/admin/dashbord');
        }
        else if(Auth::user()->userTypeId == 2){
            return view('/user/dashbord');
        }
    }

    public static function logout(){
        Auth::logout();
        return redirect('/login')->with('success', 'Logout successful.');
    }
//     public static function confirmpassword(Request $request){
//         // $userId = $request->userId;
//         // $password = $request->password;
//         // $newpassword = $request->newpassword;
//         // $confirmpassword = $request->confirmpassword;

//         // if($newpassword == $confirmpassword){
//         //     UserRepository::updatepassword($userId,$newpassword);
//         //     return redirect('/')->with('success', 'เปลี่ยนรหัสผ่านสำเร็จ!');
//         // }else{
//         //     return redirect('/')->with('error', 'รหัสผ่านไม่ตรงกัน!');
//         // }
//         $request->validate([
//             'userId' => 'required|integer',
//             'password' => 'required|string|min:6',
//             'newpassword_comfirmed' => 'required|string|min:6|confirmed',
            
//         ]);
//         return redirect('register');
// }
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
