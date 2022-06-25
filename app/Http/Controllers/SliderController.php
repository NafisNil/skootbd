<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;
use Image;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $slider = Slider::orderBy('id', 'desc')->first();
        $sliderCount = Slider::count();
        return view('admin.slider.index',['slider'=>$slider, 'sliderCount'=>$sliderCount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        //
        
        $slider = Slider::create($request->all());
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $slider);
        }
        return redirect()->route('slider.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
        return view('admin.slider.edit',[
            'edit' => $slider
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, Slider $slider)
    {
        //
        $slider->update($request->all());
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$slider->logo);
            $this->_uploadImage($request, $slider);
        }
        return redirect()->route('slider.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
        if(!empty($slider->logo));
        @unlink('storage/'.$slider->logo);
        $slider->delete();
        return redirect()->route('slider.index')->with('status','Data deleted successfully!');
    }

    private function _uploadImage($request, $slider)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
        
            Image::make($image)->resize(850, 580)->save(public_path('storage/' . $filename));

            $slider->logo = $filename;
            $slider->save();
        }
       
    }
}
