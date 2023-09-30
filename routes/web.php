<?php

use App\Http\Controllers\ApplicantController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Homepage
Route::get('/', [ApplicantController::class, 'index'])->name('homepage');

// Add Data Page
Route::get('/add-applicant', [ApplicantController::class, 'addApplicant'])->name('add-applicant.index');
// Add Data Perform
Route::post('/add-applicant/perform', [ApplicantController::class, 'addApplicantPerform'])->name('add-applicant.perform');

// Edit Data Page
Route::get('/edit-applicant/{id}', [ApplicantController::class, 'editApplicant'])->name('edit-applicant.show');
// Edit Data Perform
Route::post('/edit-applicant/perform/{id}', [ApplicantController::class, 'editApplicantPerform'])->name('edit-applicant.perform');

// Drop Data Perform
Route::delete('/delete-applicant/perform/{id}', [ApplicantController::class, 'destroyData'])->name('delete-applicant.perform');
