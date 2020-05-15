<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{
    protected $fillable = ['website_url', 'logo'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
