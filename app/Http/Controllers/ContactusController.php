<?php

namespace App\Http\Controllers;

use App\contactus;
use Illuminate\Http\Request;
use App;
use Session;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactus = App\Models\contactus::latest()->first();
        return view('admin.contactus.view', compact('contactus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.contactus.create');
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
            'address' => 'required',
            'ArAddress' => 'required',
            'phone' => 'required',
            'Arphone' => 'required',
            'fax' => 'required',
            'Arfax' => 'required',
        ));

        $contactus = new App\Models\contactus;
        $contactus
        ->setTranslation('address', 'en', $request->address )
        ->setTranslation('phone', 'en', $request->phone )
        ->setTranslation('fax', 'en', $request->fax );
        $contactus
        ->setTranslation('address', 'ar', $request->ArAddress )
        ->setTranslation('phone', 'ar', $request->Arphone )
        ->setTranslation('fax', 'ar', $request->Arfax );
        $contactus->save();
        Session::flash('success','Section added Successfully !!');
        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function show(contactus $contactus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contactus = App\Models\contactus::find($id);
        return view('admin.contactus.edit', compact('contactus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'address' => 'required',
            'ArAddress' => 'required',
            'phone' => 'required',
            'Arphone' => 'required',
            'fax' => 'required',
            'Arfax' => 'required',
        ));
        
        $contactus = App\Models\contactus::find($id);
        $contactus
        ->setTranslation('address', 'en', $request->address )
        ->setTranslation('phone', 'en', $request->phone )
        ->setTranslation('fax', 'en', $request->fax );
        $contactus
        ->setTranslation('address', 'ar', $request->ArAddress )
        ->setTranslation('phone', 'ar', $request->Arphone )
        ->setTranslation('fax', 'ar', $request->Arfax );
        $contactus->save();
        Session::flash('success','Section Updated Successfully !!');
        return redirect()->route('contactus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contactus  $contactus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactus = App\Models\contactus::destroy($id);
        return back();
    }
}
