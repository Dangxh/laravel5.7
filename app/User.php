<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'users';

    /**
     * @name 处理用户
     * @return string
     */
    public function login(){
        return 'login';
    }
}
