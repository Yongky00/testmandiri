<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [

        'username','name', 'address','bod', 'email'

    ];

}
