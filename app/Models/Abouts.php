<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abouts extends Model
{
    use HasFactory;
    protected $fillable = ['bg_image','image','title','sort_desc','global_presence','title_02','sort_desc_02','image_02','faq_title','faq_bg_image'];
}
