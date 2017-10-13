<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Avoid Mass-Assignment Exception
    protected $fillable = [
      'title',
      'body',
      'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
