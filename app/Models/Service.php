<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    // protected $table = "services";
    protected $fillable = ['thumbnail','icon','headline','content','sort_desc','status'];

    public function article()
    {
        return $this->hasMany(Article::class, 'article_cat');
    }
}
