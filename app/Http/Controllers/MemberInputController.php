<?php

namespace App\Http\Controllers;

use App\Repository\MemInputRepository;
use Illuminate\Http\Request;

class MemberInputController extends Controller
{
    public static function index()
    {
        return view('memberinput');
    }
    // public static function getall(){
    //     $memberList = MemInputRepository::getall();
    //     return $memberList;
    // }
    public static function getall(){
        $memberList = MemInputRepository::getall();
        return view('memberinput', ['memberList' => $memberList]);
    }
}
