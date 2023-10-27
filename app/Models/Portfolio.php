<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['project_name', 'domain_link', 'project_screenshot', 'brand_logo','project_src','project_display'];
}
