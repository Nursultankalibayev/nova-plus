<?php

namespace App\Http\Controllers\System;

use App\Models\TestCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows['test-category'] = TestCategory::latest('id','desc')->get();
        return view('system.test-category.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.test-category.create');
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
           'title_ru'=>'required'
        ]);
        $input = $request->all();
        TestCategory::create($input);

        return redirect()->route('test-category.index');
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
        $rows['test-category'] = TestCategory::find($id);
        return view('system.test-category.edit',compact('rows'));
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
            'title_ru'=>'required'
        ]);
        $input = $request->all();
        $test_category = TestCategory::find($id);
        $test_category->update($input);

        return redirect()->route('test-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test_category = TestCategory::find($id);
        $test_category->delete();
        $result['result'] = 1;
        return $result;
    }
}
