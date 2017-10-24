<?php

namespace App\Http\Controllers\System;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    public function index(Request $request)
    {
        $input =$request->all();
        if(isset($input['is_archive']) && $input['is_archive'] == 1){
            $rows['application'] = Application::where('is_archive',1)->orderBy('id','desc')->get();
        }else{
            $rows['application'] = Application::where('is_archive',0)->orderBy('id','desc')->get();
        }
        return view('system.application.index',compact('rows'));
    }

    public function updateToArchive(Request $request,$id)
    {
        Application::where('id',$id)->update([
           'is_archive'=>1
        ]);
        $result['result'] = 1;
        return $result;
    }

    public function destroy($id)
    {
        $application = Application::find($id);
        $application->delete();
        $result['result'] = 1;
        return $result;
    }
}
