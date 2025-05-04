<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['user_id', 'title', 'news_slug', 'description', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
