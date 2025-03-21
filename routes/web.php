<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\StudentEnrollmentController;
use App\Http\Controllers\GalleryController;

// Include the auth routes in web.php
require __DIR__.'/auth.php';

Route::get('/welcome', function () {
    return view('welcome');
})->name('home');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/enroll', function () {
    return view('enroll');
})->name('enroll');

Route::get('/facility', function () {
    return view('facility');
})->name('facility');

Route::get('/classes', function () {
    return view('classes');
})->name('classes');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

/* Route::get('/idex', function () {
    return view('idex');
})->name('idex'); */

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    Route::post('/enroll-student', [StudentEnrollmentController::class, 'store'])->name('student.enroll');


    Route::get('/admin/view-enrollment', [StudentEnrollmentController::class, 'index'])->name('admin.view-enrollment');
    Route::delete('/admin/student/{id}', [StudentEnrollmentController::class, 'destroy'])->name('admin.delete-student');
    Route::get('/admin/student/{id}/edit', [StudentEnrollmentController::class, 'edit'])->name('admin.edit-student');
    Route::put('/admin/student/{id}', [StudentEnrollmentController::class, 'update'])->name('admin.update-student');




   

// Admin Routes
Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
Route::post('/gallery.store', [GalleryController::class, 'store'])->name('gallery.store');
Route::get('/gallery.index', [GalleryController::class, 'index'])->name('gallery.index');




Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
