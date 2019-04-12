<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @name 处理用户登录
     * @author Dangxh
     */
    public function login(Request $request){
        $data = $request->all();
        return 123;
    }
}
