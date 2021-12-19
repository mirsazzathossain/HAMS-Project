<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Doctor\AppointmentController as DoctorAppointmentController;
use App\Http\Controllers\Doctor\DashboardController as DoctorDashboardController;
use App\Http\Controllers\Doctor\InformationController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HospitalController;
use App\Http\Livewire\About;
use App\Http\Livewire\BookAppoinment;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Details;
use App\Http\Livewire\Doctors;
use App\Http\Livewire\Home;
use App\Http\Livewire\MailSuccess;
use App\Http\Livewire\ShowAppoinment;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'middleware' =>['auth:sanctum', 'verified', 'role:admin']], function () {
    Route::get('/add-doctor', [DoctorController::class, 'view'])->name('admin.add-doctor');
    Route::post('/add-doctor', [DoctorController::class, 'addDoctor']);

    Route::get('/update-doctor/{id}', [DoctorController::class, 'fetchDoctor'])->name('admin.update-doctor');
    Route::post('/update-doctor', [DoctorController::class, 'updateDoctor']);
    Route::post('/delete-doctor', [DoctorController::class, 'deleteDoctor'])->name('admin.delete-doctor');
    Route::get('/doctors', [DoctorController::class, 'fetchDoctors'])->name('admin.doctors');

    Route::get('/add-appointment', [AppointmentController::class, 'view'])->name('admin.add-appointment');
    Route::get('/get-doctors', [AppointmentController::class, 'getDoctors'])->name('admin.getDoctors');
    Route::post('/add-appointment', [AppointmentController::class, 'addAppointment']);
    Route::get('/appointments', [AppointmentController::class, 'fetchAppointments'])->name('admin.appointments');
    Route::get('/update-appointment/{id}', [AppointmentController::class, 'fetchAppointment'])->name('admin.update-appointment');
    Route::post('/update-appointment', [AppointmentController::class, 'updateAppointment']);
    Route::post('/delete-appointment', [AppointmentController::class, 'deleteAppointment'])->name('admin.delete-appointment');

    Route::resource('departments', DepartmentController::class)->except(['show']);
    Route::resource('hospitals', HospitalController::class)->only(['index', 'update']);
});

Route::group(['prefix' => 'doctor', 'middleware' => ['auth:sanctum', 'verified', 'role:doctor']], function () {
    Route::resource('appointments', DoctorAppointmentController::class)->except(['show']);
    Route::resource('information', InformationController::class)->only(['index', 'update']);
});

Route::middleware(['auth:sanctum', 'verified', 'role:doctor,admin'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['prefix' => 'patient', 'middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/appointments', ShowAppoinment::class)->name('patient.appointments');
    Route::get('/book-appointment', BookAppoinment::class)->name('patient.book-appointment');
});

Route::get('/', Home::class)->name('home');
Route::get('/doctors', Doctors::class)->name('doctors');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/about-us', About::class)->name('about-us');
Route::get('/doctors/{id}', Details::class)->name('doctor.details');
Route::get('/mail-success', MailSuccess::class)->name('mail-success');