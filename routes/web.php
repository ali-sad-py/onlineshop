<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ContactUsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('web.index');

});
Route::get('/register', function () {
    return view('web.auth.register');

});
//Route::post('/register/ueser',[RegisteredUserController::class,'store'])->name('user.register');
Route::get('/contact-us',[ContactUsController::class,'contactForm'])->name('contact.us');
Route::post('/contact-us-submit',[ContactUsController::class,'submitContact'])->name('submit.contact.us');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
