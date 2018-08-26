<?php

namespace App\Http\Controllers;

use App\history;
use Illuminate\Http\Request;
use App;
use Session;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = App\Models\history::latest()->first();
        return view('admin.history.view',compact('history'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.history.create');
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
            'image' => 'required',
        ));

        $history = new App\Models\history;
        $history
        ->setTranslation('content', 'en', $request->content );
        $history
        ->setTranslation('content', 'ar', $request->ArContent );
        $image = $request->file('image');
        $imgname = time() . '.' . $image->getClientOriginalExtension();
        $location = $image->move(public_path('uploads/history'), $imgname);
        $history->image = $imgname;
        $history->save();
        Session::flash('success','Section added Successfully !!');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\history  $history
     * @return \Illuminate\Http\Response
     */
    public function show(history $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\history  $history
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $history = App\Models\history::find($id);
        return view('admin.history.edit',compact('history'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\history  $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'content' => 'required',
            'ArContent' => 'required',
        ));

        $history = App\Models\history::find($id);
        $history
        ->setTranslation('content', 'en', $request->content );
        $history
        ->setTranslation('content', 'ar', $request->ArContent );
        if($request->file('image')){

            $image = $request->file('image');
            $imgname = time() . '.' . $image->getClientOriginalExtension();
            $location = $image->move(public_path('uploads/history'), $imgname);
            $history->image = $imgname;
            $history->save();
        }
        else{
            $history
            ->setTranslation('content', 'en', $request->content );
            $history
            ->setTranslation('content', 'ar', $request->ArContent );
            $history->save();
        }

        Session::flash('success','Section updated Successfully !!');
        return redirect()->route('history.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\history  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $history = App\Models\history::destroy($id);
        return back();
    }
}
