<?php

namespace App\Http\Controllers;

use App\about;
use Illuminate\Http\Request;
use App;
use Session;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = App\Models\about::latest()->first();
        return view('admin.about.view', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'content' => 'required',
            'ArContent' => 'required',
            'title' => 'required|max:255',
            'ArTitle' => 'required|max:255',
            'description' => 'required',
            'ArDescription' => 'required',
        ));

        $about = new App\Models\about; 
        $about
        ->setTranslation('content', 'en', $request->content )
        ->setTranslation('title', 'en', $request->title )
        ->setTranslation('description', 'en', $request->description );
        $about
        ->setTranslation('content', 'ar', $request->ArContent )
        ->setTranslation('title', 'ar', $request->ArTitle )
        ->setTranslation('description', 'ar', $request->ArDescription );
        $about->save();
        Session::flash('success','Section added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function show(about $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = App\Models\about::find($id);
        return view('admin.about.edit' , compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'content' => 'required',
            'ArContent' => 'required',
            'title' => 'required|max:255',
            'ArTitle' => 'required|max:255',
            'description' => 'required',
            'ArDescription' => 'required',
        ));
        
        $about = App\Models\about::find($id);
        $about
        ->setTranslation('content', 'en', $request->content )
        ->setTranslation('title', 'en', $request->title )
        ->setTranslation('description', 'en', $request->description );
        $about
        ->setTranslation('content', 'ar', $request->ArContent )
        ->setTranslation('title', 'ar', $request->ArTitle )
        ->setTranslation('description', 'ar', $request->ArDescription );
        $about->save();
        Session::flash('success','Section updated Successfully !!');
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = App\Models\about::destroy($id);
        return back();
    }
}
