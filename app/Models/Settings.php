<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $fillable = ['project_name','project_tagline','author_name','author_email','author_phone','logo','fevicon','meta_tags','meta_desc','copyright_text'];
}
