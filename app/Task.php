<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['status','content', 'user_id'];
    
       protected $hidden = [
        'password', 'remember_token',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    
}
