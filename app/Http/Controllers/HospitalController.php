<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('components.hospital')->with([
            'hospital' => Hospital::find($id=1)
        ]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'opening_hours' => 'required',
            'social_links' => 'required',
            'contact_page_heading' => 'required',
            'contact_page_details' => 'required',
            'about_page_heading' => 'required',
            'about_page_details' => 'required',
            'footer_about' => 'required',
            'doctors_page_heading' => 'required',
            'doctors_page_details' => 'required',
            'hero_heading' => 'required',
            'hero_details' => 'required',
            'home_service_heading' => 'required',
            'home_service_details' => 'required',
            'home_team_heading' => 'required',
            'home_team_details' => 'required',
        ]);

        if(!empty($request->hero_image)){
            $image = time().'-'.$request->hero_image.'.'.$request->hero_image->getClientOriginalExtension();
            $request->hero_image->move(public_path('images'), $image);

            Hospital::where('id', $request->id)
                ->update([
                    'hero_image' => $image,
                ]);
        }

        $hospital = Hospital::find($id);
        $hospital->email = $request->email;
        $hospital->phone = $request->phone;
        $hospital->address = $request->address;
        $hospital->opening_hours = explode (", ", $request->opening_hours);
        $hospital->social_links = explode (", ", $request->social_links);
        $hospital->contact_page_heading = $request->contact_page_heading;
        $hospital->contact_page_details = $request->contact_page_details;
        $hospital->about_page_heading = $request->about_page_heading;
        $hospital->about_page_details = $request->about_page_details;
        $hospital->footer_about = $request->footer_about;
        $hospital->doctors_page_heading = $request->doctors_page_heading;
        $hospital->doctors_page_details = $request->doctors_page_details;
        $hospital->hero_heading = $request->hero_heading;
        $hospital->hero_details = $request->hero_details;
        $hospital->home_service_heading = explode (", ", $request->home_service_heading);
        $hospital->home_service_details = explode (", ", $request->home_service_details);
        $hospital->home_team_heading = $request->home_team_heading;
        $hospital->home_team_details = $request->home_team_details;
        $hospital->save();

        session()->flash('success', 'Hospital Updated Successfully');
        return redirect()->route('hospitals.index', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
