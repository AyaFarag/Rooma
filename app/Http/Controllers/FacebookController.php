<?php

namespace App\Http\Controllers;

use App\facebook;
use Illuminate\Http\Request;
use App;
use Session;

class FacebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fb = App\Models\facebook::latest()->first();

            return view('admin.socialmedia.facebook.fb',compact('fb'));
        
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

        $fb = new App\Models\facebook();
        $fb->fb_link = $request->link;
        $fb->save();
        Session::flash('success','Link added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\facebook  $facebook
     * @return \Illuminate\Http\Response
     */
    public function show(facebook $facebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\facebook  $facebook
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fb = App\Models\facebook::latest()->first();
        return view('admin.socialmedia.facebook.edit',compact('fb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\facebook  $facebook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'link' => 'required',
        ));
        
        $fb = App\Models\facebook::find($id);
        $fb->fb_link = $request->link;
        $fb->save();
        Session::flash('success','Link updated Successfully !!');
        return redirect()->route('facebook.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\facebook  $facebook
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fb = App\Models\facebook::destroy($id);
        return back();
    }
}
