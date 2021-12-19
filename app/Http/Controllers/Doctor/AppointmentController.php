<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('components.doctor.appointment-list')->with([
            'appointments' => Appointment::where('doctor_id', auth()->user()->id)->orderBy('appointment_date', 'asc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.doctor.add-appointment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'date' => 'required',
        ]);

        Appointment::create([
            'patient_name' => $request->name,
            'patient_phone' => $request->phone,
            'patient_email' => $request->email,
            'doctor_id' => auth()->user()->id,
            'message' => $request->message,
            'appointment_date' => $request->date
        ]);

        return redirect()->back()->with('success', 'Appointment Added Successfully');
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
        $appointmet = Appointment::where('id', $id)->first();
        return view('components.doctor.update-appointment')->with(['appoinment' => $appointmet]);
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
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'date' => 'required',
        ]);

        $appointment = Appointment::where('id', $id)->first();
        $appointment->patient_name = $request->name;
        $appointment->patient_phone = $request->phone;
        $appointment->patient_email = $request->email;
        $appointment->message = $request->message;
        $appointment->appointment_date = $request->date;
        $appointment->save();

        return redirect()->back()->with('success', 'Appointment Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Appointment::find($id)->delete();
        return redirect()->back()->with('success', 'Appointment Deleted Successfully');
    }
}
