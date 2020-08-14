<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use GuzzleHttp\Client as Guzzle;

class AuthController extends Controller
{
    public function __construct(Guzzle $http)
    {
        $this->http = $http;
    }
    //注册账号
    public function register(RegisterUserRequest $request){
        //写入数据库
        $user = User::create([
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'password'  =>  bcrypt($request->password)
        ]);

        $response = $this->http->post('http://huyue.test/oauth/token', [
            'form_params' => [
                'grant_type'    =>  'password',
                'client_id'     =>  '2',
                'client_secret' =>  'E73wI07kluRlLRbDSJgojXGA4rTSvP8qfc4ORLsO',
                "username"      =>  $request->email,
                "password"      =>  $request->password,
                'scope'         =>  '*'
            ],
        ]);
        $token = json_decode((string) $response->getBody(), true);
        return response()->json([
            'token'=>$token
        ],201);
    }
}
