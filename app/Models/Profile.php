<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = "profiles";
    protected $fillable = ['name','designation', 'summary','phone','email','website','experiences','photo','facebook','twitter', 'instagram','youtube'];
}
