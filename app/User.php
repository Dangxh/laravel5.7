<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //获取用户的手机号码
    public function getPhone(){
        return $this->hasMany('App\Phone', 'userId');
    }
}
