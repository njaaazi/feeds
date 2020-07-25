<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class News extends Model
{
    protected $fillable = ['title', 'url', 'user_id', 'image', 'video'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
