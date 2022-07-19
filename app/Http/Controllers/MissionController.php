<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;
use App\Http\Requests\MissionRequest;
class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mission = Mission::orderBy('id', 'desc')->first();
        $missionCount = Mission::count();
        return view('admin.mission.index',['mission'=>$mission, 'missionCount'=>$missionCount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.mission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MissionRequest $request)
    {
        //
        $mission = Mission::create($request->all());
        
        return redirect()->route('mission.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
        //
        return view('admin.mission.edit',[
            'edit' => $mission
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(MissionRequest $request, Mission $mission)
    {
        //
        $mission->update($request->all());
       
        return redirect()->route('mission.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
        //
      
        $mission->delete();
        return redirect()->route('mission.index')->with('status','Data deleted successfully!');
    }
}
