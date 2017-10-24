<?php

namespace App\Http\Controllers\Index;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;
class AuthController extends Controller
{
    public function getLogin()
    {
        if (Auth::check()) return redirect()->route('profile');
        return view('index.auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,[
           'phone'=>'required|min:14',
           'password'=>'required'
        ]);
        $input = $request->all();
        $userData = array(
            'phone'=>  $input['phone'],
            'password'=>$input['password']
        );
        if (!Auth::attempt($userData)){
            Session::flash('error','Неверный пароль или логин');
            return redirect()->back();
        }
        return redirect()->route('profile');
    }

    public function getRegister()
    {
        if (Auth::check()) return redirect()->route('profile');
        return view('index.auth.register');
    }
    public function postRegister(Request $request)
    {
        $this->validate($request,[
           'name'=>'required|max:255',
           'phone'=>'required|unique:users'
        ]);
        $input = $request->all();
        $user = new User();
        $password = str_random(8);
        $input['password'] = Hash::make($password);
        $input['token'] = Password::getRepository()->createNewToken();
        $user->create($input);
        Session::flash('success','На ваш номер отправлен код');
        Session::flash('phone',$input['phone']);
        Session::flash('password',$password);
        return redirect()->route('authGetLogin');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
