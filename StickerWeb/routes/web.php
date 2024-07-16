<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\FormController;


// Route for displaying the login form
Route::get('/', function () {
    return view('login');
})->name('login');

// Route for displaying the dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route for displaying a table
Route::get('/table', function () {
    return view('table');
})->name('table');

// Route for displaying the registration form
Route::get('/register', function () {
    return view('registration');
})->name('registration');

// Route for displaying a registration form via a nested URL
Route::get('/form', function () {
    return view('form');
})->name('form');


// Uncommented FormController routes
// Route::get('/form', [FormController::class, 'create'])->name('form.create');
// Route::post('/form/store', [FormController::class, 'store'])->name('form.store');
// Route::get('/forms', [FormController::class, 'view'])->name('form.view');
// Route::get('/form/edit/{id}', [FormController::class, 'edit'])->name('form.edit');
// Route::put('/form/update/{id}', [FormController::class, 'update'])->name('form.update');
// Route::get('/form/delete/{id}', [FormController::class, 'delete'])->name('form.delete');
