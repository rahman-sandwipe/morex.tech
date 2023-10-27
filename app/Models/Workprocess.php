<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workprocess extends Model
{
    use HasFactory;
    protected $fillable =['title','sort_desc','bg_image','title_01','sort_desc_01','title_02','sort_desc_02','title_03','sort_desc_03','title_04','sort_desc_04'];
}
