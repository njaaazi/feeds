<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class News extends Model
{
    protected $fillable = ['title', 'url', 'user_id', 'image', 'video', 'is_featured'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function featuredPost()
    {
         $this->is_featured = 1;
         $this->save();
    }

    public function removeFeaturedPost()
    {
         $this->is_featured = 0;
         $this->save();
    }
}
