<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //执行模型是否会自动维护时间戳
//    public $timestamps = false;
    //模型中日期字段的存储格式
//    protected $dateFormat = 'U';

//    const CREATED_AT = 'creation_date';
//    const UPDATED_AT = 'last_update';
    //可以被批量赋值的属性
    protected $fillable = ['name'];
}
