<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    //
    protected $fillable=[
        'user_id','country_id','profile_id'
    ];
}
