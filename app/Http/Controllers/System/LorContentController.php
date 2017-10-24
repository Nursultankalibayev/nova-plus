<?php

namespace App\Http\Controllers\System;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LorContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows['lor-content'] = Post::where('category_id',3)
            ->orderBy('id','desc')
            ->get();
        return view('system.lor-content.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.lor-content.create');
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
           'price_ru'=>'required',
           'sorting'=>'required',
        ]);

        $input = $request->all();
        $input['category_id'] = 3;
        $input['type'] = 1;

        Post::create($input);

        return redirect()->route('lor-content.index');
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
        $rows['lor-content'] = Post::find($id);
        return view('system.lor-content.edit',compact('rows'));
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
            'price_ru'=>'required',
            'sorting'=>'required',
        ]);
        $lor_content = Post::find($id);
        $input = $request->all();
        $input['category_id'] = 3;
        $input['type'] = 1;

        $lor_content->update($input);

        return redirect()->route('lor-content.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lor_content = Post::find($id);
        $lor_content->delete();
        $result['result'] = 1;
        return $result;
    }
}
