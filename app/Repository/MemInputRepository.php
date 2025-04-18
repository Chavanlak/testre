<?php
namespace App\Repository;
use App\Models\MemberInput;

class MemInputRepository{
    public static function getall(){
        return MemberInput::all();
    }
} 
?>