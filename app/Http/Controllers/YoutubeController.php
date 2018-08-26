<?php

namespace App\Http\Controllers;

use App\youtube;
use Illuminate\Http\Request;
use App;
use Session;

class YoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $youtube = App\Models\youtube::latest()->first();
        return view('admin.socialmedia.youtube.view',compact('youtube'));
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
        $youtube = new App\Models\youtube();
        $youtube->youtube_link = $request->link;
        $youtube->save();
        Session::flash('success','Link added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function show(youtube $youtube)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $youtube = App\Models\youtube::find($id);
        return view('admin.socialmedia.youtube.edit',compact('youtube'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'link' => 'required',

        ));
        
        $youtube = App\Models\youtube::find($id);
        $youtube->youtube_link = $request->link;
        $youtube->save();
        Session::flash('success','Link updated Successfully !!');
        return redirect()->route('youtube.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\youtube  $youtube
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $youtube = App\Models\youtube::destroy($id);
        return back();
    }
}
