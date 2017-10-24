<?php

namespace App\Http\Controllers\System;

use App\Models\TestCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Test;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows['tests'] = Test::latest('id','desc')->get();
        return view('system.test.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rows['categories'] = TestCategory::orderBy('title_ru','asc')->get();
        return view('system.test.create',compact('rows'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'title_ru'=>'required',
           'price'=>'required'
        ]);
        $input = $request->all();
        Test::create($input);
        return redirect()->route('test.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rows['categories'] = TestCategory::orderBy('title_ru','asc')->get();
        $rows['test'] = Test::find($id);
        return view('system.test.edit',compact('rows'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title_ru'=>'required',
            'price'=>'required'
        ]);
        $input = $request->all();
        $test = Test::find($id);
        $test->update($input);
        return redirect()->route('test.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Test::find($id);
        $test->delete();
        $result['result'] = 1;
        return $result;
    }
}
