<?php

namespace App\Http\Controllers\System;

use App\Models\Faq;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function index()
    {
        $rows['faqs'] = Faq::orderBy('id','desc')->get();
        return view('system.faq.index',compact('rows'));
    }

    public function edit($id)
    {
        $rows['faq'] = Faq::find($id);
        return view('system.faq.edit',compact('rows'));
    }

    public function create()
    {
        $rows['users'] = User::where('role',0)->select(['id','name'])->get();
        return view('system.faq.create',compact('rows'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'email'=>'required|email',
           'user_id'=>'required',
            'query'=>'required'
        ]);

        $input = $request->all();
        if(isset($input['is_site'])) {
            $input['is_site'] = 1;
        }else{
            $input['is_site'] = 0;
        }
        Faq::create($input);

        return redirect()->route('faq.index');
    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'query'=>'required',
        ]);
        $input = $request->all();
        $input['is_site'] = isset($request['is_site']) ? 1 : 0;
        $faq = Faq::find($id);
        $faq->update($input);
        return redirect()->route('faq.index');
    }

    public function delete($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        $result['result'] = 1;
        return $result;
    }
}
