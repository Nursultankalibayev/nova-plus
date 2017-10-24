<?php

namespace App\Http\Controllers\System;

use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows['carousels'] = Carousel::latest('id','desc')->get();
        return view('system.carousel.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.carousel.create');
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
            'short_desc_ru' =>'required',
            'title_button_ru'=>'required',
            'image'=>'required',
            'type'=>'required'
        ]);
        $input = $request->all();
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/carousels'),$imageName);
        }
        $input['image'] = $imageName;
        Carousel::create($input);
        return redirect()->route('carousel.index');
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
        $rows['carousel'] = Carousel::find($id);
        return view('system.carousel.edit',compact('rows'));
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
            'short_desc_ru' =>'required',
            'title_button_ru'=>'required',
            'type'=>'required'
        ]);
        $input = $request->all();
        $carousel = Carousel::find($id);
        if($request->hasFile('image')){
            File::delete('uploads/carousels/'.$carousel['image']);
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/carousels'),$imageName);
            $input['image'] = $imageName;
        }
        $carousel->update($input);
        return redirect()->route('carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = Carousel::find($id);
        File::delete('uploads/carousels/'.$carousel['image']);
        $carousel->delete();
        $result['result'] = 1;
        return $result;
    }
}
