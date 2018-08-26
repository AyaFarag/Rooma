<?php

namespace App\Http\Controllers;

use App\home;
use Illuminate\Http\Request;
use App;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = App\Models\slider::orderBy('id','desc')->get();
        $news = App\Models\news::orderBy('id','desc')->get();
        $about = App\Models\about::latest()->first($about = null);
        if (!$about) {
            $about = App\Models\about::create([
              'content' => '',
              'title' => '',
              'description' => '',
            ]);
          }
        $history = App\Models\history::latest()->first();
        if (!$history) {
            $history = App\Models\history::create([
              'content' => '',
              'image' => '',
            ]);
          }
        $careers = App\Models\careers::latest()->first();
        if (!$careers) {
            $careers = App\Models\careers::create([
              'paragraph1' => '',
              'paragraph2' => '',
              'email' => '',
            ]);
          }
        $contacts = App\Models\contactus::latest()->first();
        if (!$contacts) {
            $contacts = App\Models\contactus::create([
              'address' => '',
              'phone' => '',
              'fax' => '',
            ]);
          }
        $fb = App\Models\facebook::latest()->first();
        if (!$fb) {
            $fb = App\Models\facebook::create([
              'fb_link' => '',
            ]);
          }
        $twitter = App\Models\twitter::latest()->first();
        if (!$twitter) {
            $twitter = App\Models\twitter::create([
              'twitter_link' => '',
            ]);
          }
        $instagram = App\Models\instagram::latest()->first();
        if (!$instagram) {
            $instagram = App\Models\instagram::create([
              'instagram_link' => '',
            ]);
          }
        $linkedin = App\Models\linkedin::latest()->first();
        if (!$linkedin) {
            $linkedin = App\Models\linkedin::create([
              'linkedin_link' => '',
            ]);
          }
        $youtube = App\Models\youtube::latest()->first();
        if (!$youtube) {
            $youtube = App\Models\youtube::create([
              'youtube_link' => '',
            ]);
          }
        
        return view('en.index',compact('sliders','about','history','news','careers','contacts','fb','twitter','instagram','linkedin','youtube'));
        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ar_home  $ar_home
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ar_home  $ar_home
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ar_home  $ar_home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ar_home  $ar_home
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}