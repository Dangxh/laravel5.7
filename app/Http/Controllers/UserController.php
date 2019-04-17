<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreBlogPost;
use App\Phone;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @name 处理用户登录
     * @author Dangxh
     */
    public function login(StoreBlogPost $request){
        dd(11);
        $validate = $request->validate();
    }

    public function user(){
        $user = new User();
        $user->username = $this->request->username;
        $user->password = md5($this->request->password);
        $user->intro = $this->request->intro;
        $user->save();
    }

    public function phone(){
        $phone = new Phone();
        $phone->userId = $this->request->userId;
        $phone->phone = $this->request->phone;
        $phone->save();
    }

    public function getPhone(){
        $phone = User::find($this->request->id)->getPhone()->where('phone', 18780225975)->get();
        return $phone;
    }
}
