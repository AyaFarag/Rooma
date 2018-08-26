<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;
use App;
use Session;

class SliderController extends Controller
{

    public function index()
    {
        $slider = App\Models\slider::orderBy('id','desc')->get();
            
            return view('admin.slider.view',compact('slider'));
        
    }

 
    public function create()
    {
        return view('admin.slider.create');
    }


    public function store(Request $request )
    {
        $this->validate($request, array(
            'title' => 'required|max:70',
            'ArTitle' => 'required|max:300',
            'content' => 'required|max:300',
            'ArContent' => 'required|max:300',
            'image' => 'required',
        ));

        $slider = new App\Models\slider; 
        $slider
        ->setTranslation('title', 'en', $request->title )
        ->setTranslation('content', 'en', $request->content );
        $slider
        ->setTranslation('title', 'ar', $request->ArTitle )
        ->setTranslation('content', 'ar', $request->ArContent );
        $image = $request->file('image');
        $imgname = time() . '.' . $image->getClientOriginalExtension();
        $location = $image->move(public_path('uploads/sliders'), $imgname);
        $slider->image = $imgname;
        $slider->save();

        Session::flash('success','Slider added Successfully !!');
        return back();
        
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $slider = App\Models\slider::find($id);
        return view('admin.slider.edit',compact('slider'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'title' => 'required|max:70',
            'ArTitle' => 'required|max:300',
            'content' => 'required|max:300',
            'ArContent' => 'required|max:300',
        ));

        $slider = App\Models\slider::find($id);
        $slider
        ->setTranslation('title', 'en', $request->title )
        ->setTranslation('content', 'en', $request->content );
        $slider
        ->setTranslation('title', 'ar', $request->ArTitle )
        ->setTranslation('content', 'ar', $request->ArContent );


          if ($request->has('image')  ){
        $image = $request->file('image');
        $imgname = time() . '.' . $image->getClientOriginalExtension();
        $location = $image->move(public_path('uploads/sliders'), $imgname);
        $slider->image = $imgname;

            $slider->save();
        }
        else{
            $slider
            ->setTranslation('title', 'en', $request->title )
            ->setTranslation('content', 'en', $request->content );
            $slider
            ->setTranslation('title', 'ar', $request->ArTitle )
            ->setTranslation('content', 'ar', $request->ArContent );
            $slider->save();
        }
        Session::flash('success','Slider updated Successfully !!');
        return redirect()->route('slider.index');
    }


    public function destroy($id)
    {
        $slider = App\Models\slider::destroy($id);
        return back();
    }
}
