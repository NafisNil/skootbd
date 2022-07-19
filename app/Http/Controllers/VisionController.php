<?php

namespace App\Http\Controllers;

use App\Models\Vision;
use Illuminate\Http\Request;
use App\Http\Requests\VisionRequest;
class VisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vision = Vision::orderBy('id', 'desc')->first();
        $visionCount = Vision::count();
        return view('admin.vision.index',['vision'=>$vision, 'visionCount'=>$visionCount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.vision.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VisionRequest $request)
    {
        //
        $vision = Vision::create($request->all());
        
        return redirect()->route('vision.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function show(Vision $vision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function edit(Vision $vision)
    {
        //
        return view('admin.vision.edit',[
            'edit' => $vision
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function update(VisionRequest $request, Vision $vision)
    {
        //
        $vision->update($request->all());
       
        return redirect()->route('vision.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vision $vision)
    {
        //
        $vision->delete();
        return redirect()->route('vision.index')->with('status','Data deleted successfully!');
    }
}
