<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;

class AuthController extends Controller
{
    //注册账号
    public function register(RegisterUserRequest $request){
        //写入数据库
        $user = User::create([
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'password'  =>  bcrypt($request->password)
        ]);
        return response()->json([
            'code'=>'200',
            'data'=>'注册成功'
        ],200);
    }
}
