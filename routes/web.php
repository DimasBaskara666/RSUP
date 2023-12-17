<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
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

// Route::get('/',function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::get('/login', function () {
    return view('auth\login');
})->name('login');

Route::get('/register', function () {

    return view('auth\register');
})->name('register');

// Route::controller(DBController::class)->group(function () {
    //     Route::get('/','index');
    // });
    
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
        ])->group(function () {
            Route::get('/dashboard', function () {
                return view('dashboard');
            })->name('dashboard');
        });
        
Route::get('/add_doctor_view',[AdminController::class,'addview']); 
Route::post('/upload_doctor',[AdminController::class,'upload']); 
Route::post('/appointment',[HomeController::class,'appointment']); 
Route::get('/myappointment',[HomeController::class,'myappointment']); 
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']); 