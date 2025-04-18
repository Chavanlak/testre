<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberInput extends Model
{
    protected $table = 'memberinput';
    protected $primaryKey = 'IdMember';
    public $timestamps = false;
    public $incrementing = false;

    use HasFactory;
}
