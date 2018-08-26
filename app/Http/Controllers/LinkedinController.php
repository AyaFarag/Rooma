<?php

namespace App\Http\Controllers;

use App\linkedin;
use Illuminate\Http\Request;
use App;
use Session;

class LinkedinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linkedin = App\Models\linkedin::latest()->first();
        return view('admin.socialmedia.linkedin.view',compact('linkedin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'link' => 'required',
        ));
        $linkedin = new App\Models\linkedin();
        $linkedin->linkedin_link = $request->link;
        $linkedin->save();
        Session::flash('success','Link added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\linkedin  $linkedin
     * @return \Illuminate\Http\Response
     */
    public function show(linkedin $linkedin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\linkedin  $linkedin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $linkedin = App\Models\linkedin::find($id);
        return view('admin.socialmedia.linkedin.edit',compact('linkedin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\linkedin  $linkedin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'link' => 'required',
        ));
        $linkedin = App\Models\linkedin::find($id);
        $linkedin->linkedin_link = $request->link;
        $linkedin->save();
        Session::flash('success','Link updated Successfully !!');
        return redirect()->route('linkedin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\linkedin  $linkedin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $linkedin = App\Models\linkedin::destroy($id);
        return back();
    }
}
