<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function registration(RegisterUserRequest $request){
        $role = Role::where('name-role', 'user');
        $user = new User();
        $user->name = $request->name;
        $user->login = $request->login;
        $user->password = bcrypt($request->password);
        $user->role_id = $role->find(1)->id;
        $user->save();

        return redirect()->back();
    }

    public function login(Request $request){
        $login = $request->login;
        $password = $request->password;
        $user_data = array(
            'login' => $login,
            'password' => $password,
        );
        if(Auth::attempt($user_data)){
            return redirect()->route('profile');
        }
        else{
            return redirect()->back()->withErrors(['error_auth' => 'Непревельный логин или пароль']);
        }

    }

    public function logout(){
        if (Auth::check()){
            Auth::logout();
            return redirect()->route('index');
        }
    }
}
