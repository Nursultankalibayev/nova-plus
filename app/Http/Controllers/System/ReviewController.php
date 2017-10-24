<?php

namespace App\Http\Controllers\System;

use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows['reviews'] = Review::orderBy('id','desc')->get();
        return view('system.review.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rows['users'] = User::where('role',0)->select(['id','name'])->get();
        return view('system.review.create',compact('rows'));
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
           'email'=>'required|email',
           'user_id'=>'required',
            'review'=>'required'
        ]);
        $input = $request->all();

        if(isset($input['is_site'])){
            $input['is_site'] = 1;
        }else{
            $input['is_site'] = 0;
        }

        Review::create($input);

        return redirect()->route('review.index');
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
        $rows['review'] = Review::find($id);
        return view('system.review.edit',compact('rows'));
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
            'email'=>'required',
            'review'=>'required'
        ]);

        $input = $request->all();
        $input['is_site'] = isset($request['is_site']) ? 1 : 0;
        $review = Review::find($id);
        $review->update($input);
        return redirect()->route('review.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();
        $result['result'] = 1;
        return $result;
    }
}
