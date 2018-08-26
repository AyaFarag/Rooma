<?php

namespace App\Http\Controllers;

use App\twitter;
use Illuminate\Http\Request;
use App;
use Session;

class TwitterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $twitter = App\Models\twitter::latest()->first();
        return view('admin.socialmedia.twitter.view',compact('twitter'));
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
        $twitter = new App\Models\twitter();
        $twitter->twitter_link = $request->link;
        $twitter->save();
        Session::flash('success','Link added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\twitter  $twitter
     * @return \Illuminate\Http\Response
     */
    public function show(twitter $twitter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\twitter  $twitter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $twitter = App\Models\twitter::find($id);
        return view('admin.socialmedia.twitter.edit',compact('twitter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\twitter  $twitter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'link' => 'required',

        ));
        $twitter = App\Models\twitter::find($id);
        $twitter->twitter_link = $request->link;
        $twitter->save();
        Session::flash('success','Link updated Successfully !!');
        return redirect()->route('twitter.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\twitter  $twitter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $twitter = App\Models\twitter::destroy($id);
        return back();
    }
}
