<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = User::find(auth()->user()->id);
        $departments = Department::all();
        return view('components.doctor.about', compact('doctor', 'departments'));
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
        ]);

        if(!empty($request->image)){
            $image = time().'-'.$request->name.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $image);

            User::where('id', $id)
                ->update([
                    'profile_photo_path' => $image,
                ]);
        }

        if(!empty($request->password)){
            User::where('id', $id)
                ->update([
                    'password' => Hash::make($request->password),
                ]);
        }

        User::where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'role' => 'doctor',
                'address' => $request->address,
                'doctor_profession' => $request->profession,
                'doctor_speciality' => $request->speciality,
                'doctor_conditions' => $request->conditions,
                'doctor_experience' => $request->experience,
                'social_links' => explode (",", $request->social_links),
                'doctor_memberships' => explode (",", $request->doctor_memberships),
                'doctor_awards' => explode (",", $request->doctor_awards),
                'doctor_education' => explode (",", $request->doctor_education),
                'doctor_biography' => $request->biography,
                'doctor_research_interests' => $request->research_interests,
                'doctor_tagline' => $request->tagline,
                'department_id' => $request->department,
                'doctor_schedule' => explode (",", $request->schedule),
            ]);

        return redirect()->back()->with('success', 'Information Updated Successfully');
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
