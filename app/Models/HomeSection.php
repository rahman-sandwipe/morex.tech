<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
    use HasFactory;
    protected $fillable = ['sub_title', 'title', 'sort_desc', 'button_contact', 'button_blog', 'image','shape_image'];
}
