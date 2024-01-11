<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/", [HomeController::class,"home"])->name('home');
Route::get('/aboutme', [AboutMeController::class, 'aboutme'])->name('aboutme');
Route::get('/projects', [ProjectsController::class, 'projects'])->name('projects');
// Route::get('/contact', [ContactController::class, 'showForm'])->name('contacts');



// // Route to display the contact form
Route::get('/showForm', [ContactController::class, 'showForm'])->name('contact.showForm');

// Route to handle the form submission
Route::post('/home', [ContactController::class, 'submitForm'])->name('contact.submit');