<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    function updateDoctor(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if(!empty($request->image)){
            $image = time().'-'.$request->name.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $image);

            User::where('id', $request->id)
                ->update([
                    'profile_photo_path' => $image,
                ]);
        }

        if(!empty($request->password)){
            User::where('id', $request->id)
                ->update([
                    'password' => Hash::make($request->password),
                ]);
        }

        User::where('id', $request->id)
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
                'doctor_department' => $request->department,
            ]);

        return redirect()->back()->with('success', 'Doctor Added Successfully');
    }

    function deleteDoctor(Request $request)
    {
        User::where('id', $request->id)->delete();

        return redirect()->back()->with('success', 'Doctor Deleted Successfully');
    }

    function fetchDoctor($id)
    {
        $doctor = User::where('id', $id)->first();

        return view('components.update-doctor-info')->with('doctor', $doctor);
    }

    function fetchDoctors()
    {
        $doctors = User::where('role', 'doctor')->get();

        return view('components.doctors-list')->with('doctors', $doctors);
    }

    function addDoctor(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $image = time().'-'.$request->name.'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $image);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'role' => 'doctor',
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'profile_photo_path' => $image,
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
            'doctor_department' => $request->department,
        ]);

        return redirect()->back()->with('success', 'Doctor Added Successfully');
    }
}
