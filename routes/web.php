<?php

use App\Http\Controllers\DoctorController;
use App\Http\Livewire\About;
use App\Http\Livewire\BookAppoinment;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Details;
use App\Http\Livewire\Doctors;
use App\Http\Livewire\Home;
use App\Http\Livewire\MailSuccess;
use App\Http\Livewire\ShowAppoinment;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');
Route::get('/doctors', Doctors::class)->name('doctors');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/about-us', About::class)->name('about-us');
Route::get('/doctor/{id}', Details::class)->name('doctor.details');
Route::get('/mail-success', MailSuccess::class)->name('mail-success');

Route::group(['prefix' => 'admin', 'middleware' =>['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/add-doctor', function(){
        return view('components.add-doctor');
    })->name('admin.add-doctor');
    Route::post('/add-doctor', [DoctorController::class, 'addDoctor']);

    Route::get('/update-doctor/{id}', [DoctorController::class, 'fetchDoctor'])->name('admin.update-doctor');
    Route::post('/update-doctor', [DoctorController::class, 'updateDoctor']);
    Route::post('/delete-doctor', [DoctorController::class, 'deleteDoctor'])->name('admin.delete-doctor');

    Route::get('/doctors', [DoctorController::class, 'fetchDoctors'])->name('admin.doctors');
});

Route::group(['prefix' => 'patient', 'middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/appointments', ShowAppoinment::class)->name('patient.appointments');
    Route::get('/book-appointment', BookAppoinment::class)->name('patient.book-appointment');
});