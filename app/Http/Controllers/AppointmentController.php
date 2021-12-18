<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    function updateAppointment(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'doctor' => 'required',
            'date' => 'required',
        ]);

        Appointment::where('id', $request->id)
            ->update([
                'patient_name' => $request->name,
                'patient_phone' => $request->phone,
                'patient_email' => $request->email,
                'doctor_id' => $request->doctor,
                'message' => $request->message,
                'appointment_date' => $request->date
            ]);

        return redirect()->back()->with('success', 'Doctor Added Successfully');
    }

    function deleteAppointment(Request $request)
    {
        Appointment::where('id', $request->id)->delete();

        return redirect()->back()->with('success', 'Doctor Deleted Successfully');
    }

    function fetchAppointment($id)
    {
        $appoinment = Appointment::where('id', $id)->first();
        $departments = DB::table('departments')->get();

        return view('components.update-appointment')->with(['appoinment' => $appoinment, 'departments' => $departments]);
    }

    function fetchAppointments()
    {
        $appointments = Appointment::all();

        return view('components.appoinment-list', compact('appointments'));
    }

    function addAppointment(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'doctor' => 'required',
            'date' => 'required',
        ]);
        
        Appointment::create([
                'patient_name' => $request->name,
                'patient_phone' => $request->phone,
                'patient_email' => $request->email,
                'doctor_id' => $request->doctor,
                'message' => $request->message,
                'appointment_date' => $request->date
            ]);

        return redirect()->back()->with('success', 'Appointment Added Successfully');
    }

    public function view()
    {
        $departments = DB::table('departments')->get();
        
        return view('components.add-appoinment', compact('departments'));
    }

    public function getDoctors(Request $request)
    {
        $doctors = DB::table('users')
            ->select('id', 'name')
            ->where('doctor_department', $request->department)
            ->get();
        
        if (count($doctors) > 0) {
            return response()->json($doctors);
        }
    }
}
