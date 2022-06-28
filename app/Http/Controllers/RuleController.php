<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use Illuminate\Http\Request;
use App\Http\Requests\RuleRequest;
use Image;
class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rule = Rule::orderBy('id', 'desc')->first();
        $ruleCount = Rule::count();
        return view('admin.rule.index',['rule'=>$rule, 'ruleCount'=>$ruleCount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.rule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RuleRequest $request)
    {
        //
        $rule = Rule::create($request->all());
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $rule);
        }
        return redirect()->route('rule.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function show(Rule $rule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function edit(Rule $rule)
    {
        //
        return view('admin.rule.edit',[
            'edit' => $rule
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function update(RuleRequest $request, Rule $rule)
    {
        //
        $rule->update($request->all());
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $rule);
        }
        return redirect()->route('rule.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rule $rule)
    {
        //
        if(!empty($rule->logo));
        @unlink('storage/'.$rule->logo);
        $rule->delete();
        return redirect()->route('rule.index')->with('status','Data deleted successfully!');
    }

    private function _uploadImage($request, $logo)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
        
            Image::make($image)->resize(450, 570)->save(public_path('storage/' . $filename));

            $logo->logo = $filename;
            $logo->save();
        }
       
    }
}
