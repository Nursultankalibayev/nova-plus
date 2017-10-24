<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\File;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows['services'] = Post::where('category_id',1)
            ->latest('id','desc')
            ->get();
        return view('system.service.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.service.create');
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
            'desc_ru'=>'required',
            'image'=>'required',
            'sorting'=>'required',
            'price_ru'=>'required'
        ]);
        $input = $request->all();
        $category_id = 1;
        $type = 1;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/services'),$imageName);
        }
        $input['image'] = $imageName;
        $input['category_id']=$category_id;
        $input['type'] = $type;

        Post::create($input);

        return redirect()->route('service.index');
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
        $rows['service'] = Post::find($id);
        return view('system.service.edit',compact('rows'));
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
            'desc_ru'=>'required',
            'sorting'=>'required',
            'price_ru'=>'required'
        ]);
        $input = $request->all();
        $category_id = 1;
        $type = 1;
        $service = Post::find($id);
        if($request->hasFile('image')){
            File::delete('uploads/services/'.$service['image']);
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/services'),$imageName);
            $input['image'] = $imageName;
        }else{
            $input['image'] = $service['image'];
        }
        $input['category_id']=$category_id;
        $input['type'] = $type;

        $service->update($input);

        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Post::find($id);
        File::delete('uploads/services/'.$service['image']);
        $service->delete();
        $result['result'] = 1;
        return $result;
    }
}
