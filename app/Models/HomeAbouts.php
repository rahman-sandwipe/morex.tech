<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAbouts extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'sort_desc', 'button', 'image'];
}
