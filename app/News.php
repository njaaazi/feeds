<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class News extends Model
{
    protected $fillable = ['title', 'url', 'user_id', 'image', 'video', 'taken_at', 'type_name'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
