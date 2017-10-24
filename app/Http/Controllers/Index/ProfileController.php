<?php

namespace App\Http\Controllers\Index;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $rows['profile'] = Auth::user()->toArray();
        return view('index.profile',compact('rows'));
    }

    public function profileRequestSave(Request $request)
    {
        $input = $request['data'];
        if(strlen ($input['phone']) > 13 && strlen($input['name']) > 0){
            $user = Auth::user();
            $user->update($input);
            $result['success'] = 'Успешно сохранен';
        }else{
            $result['error'] = 'Заполните правильными данными';
        }

        return $result;
    }
}
