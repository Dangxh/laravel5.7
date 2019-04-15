<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreBlogPost;

class UserController extends Controller
{
    /**
     * @name 处理用户登录
     * @author Dangxh
     */
    public function login(StoreBlogPost $request){
        dd(11);
        $validate = $request->validate();
    }
}
