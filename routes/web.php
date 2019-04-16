<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('api', function(){
    return ['version' => '0.1'];
});

Route::get('api/user', function(){
    return 'user api';
});

//处理用户登录逻辑
Route::get('api/login', 'UserController@login');

//路由命名
Route::get('user/name', function (){
   return 'user-name';
})->name('username');

Route::get('user/rename', function (){
//    $url = route('username');
//    var_dump($url);
    return redirect()->route('username');
});
