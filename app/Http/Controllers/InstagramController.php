<?php

namespace App\Http\Controllers;

use App\instagram;
use Illuminate\Http\Request;
use App;
use Session;

class InstagramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instagram = App\Models\instagram::latest()->first();
        return view('admin.socialmedia.instagram.view',compact('instagram'));
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

        $instagram = new App\Models\instagram();
        $instagram->instagram_link = $request->link;
        $instagram->save();
        Session::flash('success','Link added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\instagram  $instagram
     * @return \Illuminate\Http\Response
     */
    public function show(instagram $instagram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\instagram  $instagram
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instagram = App\Models\instagram::find($id);
        return view('admin.socialmedia.instagram.edit',compact('instagram'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\instagram  $instagram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'link' => 'required',
        ));
        $instagram = App\Models\instagram::find($id);
        $instagram->instagram_link = $request->link;
        $instagram->save();
        Session::flash('success','Link updated Successfully !!');
        return redirect()->route('instagram.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\instagram  $instagram
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instagram = App\Models\instagram::destroy($id);
        return back();
    }
}
