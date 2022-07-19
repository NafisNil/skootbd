<?php

namespace App\Http\Controllers;

use App\Models\Cmessage;
use Illuminate\Http\Request;
use App\Http\Requests\CmessageRequest;
class CmessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cm = Cmessage::orderBy('id', 'desc')->get();
        
        return view('admin.cmessage.index',['cm'=>$cm]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cmessage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CmessageRequest $request)
    {
        //
        $cm = Cmessage::create($request->all());

        return redirect()->back()->with('success','Message sent successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cmessage  $cmessage
     * @return \Illuminate\Http\Response
     */
    public function show(Cmessage $cmessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cmessage  $cmessage
     * @return \Illuminate\Http\Response
     */
    public function edit(Cmessage $cmessage)
    {
        //
        return view('admin.cmessage.edit',[
            'edit' => $cmessage
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cmessage  $cmessage
     * @return \Illuminate\Http\Response
     */
    public function update(CmessageRequest $request, Cmessage $cmessage)
    {
        //
        $cmessage->update($request->all());
     
        return redirect()->route('cmessage.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cmessage  $cmessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cmessage $cmessage)
    {
        //
        $cmessage->delete();
        return redirect()->route('cmessage.index')->with('status','Data deleted successfully!');
    }
}
