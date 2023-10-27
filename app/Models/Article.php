<?php

namespace App\Models;

use App\Models\User;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['headline','article_author','article_cat','content','status','thumbnail','meta_tags','meta_desc'];
    public function user()
    {
        return $this->belongsTo(User::class, 'article_author');
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'article_cat');
    }
    
}
