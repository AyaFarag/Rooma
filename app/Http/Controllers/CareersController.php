<?php

namespace App\Http\Controllers;

use App\careers;
use Illuminate\Http\Request;
use App;
use Session;


class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = App\Models\careers::latest()->first();
        return view('admin.careers.view',compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.careers.create');
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
                'description' => 'required',
                'paragraph' => 'required',
                'ArDescription' => 'required',
                'ArParagraph' => 'required',
                'email' => 'required',
            ));

        $careers = new App\Models\careers;
        $careers
        ->setTranslation('paragraph1', 'en', $request->description )
        ->setTranslation('paragraph2', 'en', $request->paragraph );
        $careers
        ->setTranslation('paragraph1', 'ar', $request->ArDescription )
        ->setTranslation('paragraph2', 'ar', $request->ArParagraph );
        
        $careers->email = $request->email;
        
        $careers->save();
        Session::flash('success','Section added Successfully !!');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function show(careers $careers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $careers = App\Models\careers::find($id);
        return view('admin.careers.edit',compact('careers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'description' => 'required',
            'paragraph' => 'required',
            'ArDescription' => 'required',
            'ArParagraph' => 'required',
            'email' => 'required',
        ));
        
        $careers = App\Models\careers::find($id);
        $careers
        ->setTranslation('paragraph1', 'en', $request->description )
        ->setTranslation('paragraph2', 'en', $request->paragraph );
        $careers
        ->setTranslation('paragraph1', 'ar', $request->ArDescription )
        ->setTranslation('paragraph2', 'ar', $request->ArParagraph );
        $careers->email = $request->email;
        $careers->save();
        Session::flash('success','Section added Successfully !!');
        return redirect()->route('careers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $careers = App\Models\careers::destroy($id);
        return back();
    }
}
