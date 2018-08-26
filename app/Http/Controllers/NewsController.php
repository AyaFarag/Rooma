<?php

namespace App\Http\Controllers;

use App\news;
use Illuminate\Http\Request;
use App;
use Session;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = App\Models\news::orderBy('id','dsec')->get();
        return view('admin.news.view',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.news.create');
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
            'title' => 'required|max:70',
            'ArTitle' => 'required|max:70',
            'content' => 'required|max:200',
            'ArContent' => 'required|max:200',
            'image' => 'required',
        ));

        $news = new App\Models\news;
        $news
        ->setTranslation('title', 'en', $request->title )
        ->setTranslation('content', 'en', $request->content );
        $news
        ->setTranslation('title', 'ar', $request->ArTitle )
        ->setTranslation('content', 'ar', $request->ArContent );
        $image = $request->file('image');
        $imgname = time() . '.' . $image->getClientOriginalExtension();
        $location = $image->move(public_path('uploads/news'), $imgname);
        $news->image = $imgname;
        $news->save();
        Session::flash('success','News added Successfully !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(news $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = App\Models\news::find($id);
        return view('admin.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'title' => 'required|max:70',
            'ArTitle' => 'required|max:70',
            'content' => 'required|max:200',
            'ArContent' => 'required|max:200',
        ));

        $news = App\Models\news::find($id);
        $news
        ->setTranslation('title', 'en', $request->title )
        ->setTranslation('content', 'en', $request->content );
        $news
        ->setTranslation('title', 'ar', $request->ArTitle )
        ->setTranslation('content', 'ar', $request->ArContent );
        if($request->file('image')){

            $image = $request->file('image');
            $imgname = time() . '.' . $image->getClientOriginalExtension();
            $location = $image->move(public_path('uploads/news'), $imgname);
            $news->image = $imgname;
            $news->save();
        }
        else{
            $news
            ->setTranslation('title', 'en', $request->title )
            ->setTranslation('content', 'en', $request->content );
            $news
            ->setTranslation('title', 'ar', $request->ArTitle )
            ->setTranslation('content', 'ar', $request->ArContent );
            $news->save();
        }
        Session::flash('success','News updated Successfully !!');
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = App\Models\news::destroy($id);
        return back();
    }
}
