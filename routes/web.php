<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\uploadController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\complainController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\emailController;
use App\Http\Controllers\informationController;
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
Route::get('/', [Controller::class, 'index'])->name('welcome');

Route::get('/about', function () {
    return view('about');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/contactUs', function () {
    return view('contact');
});

Route::get('/misi', function () {
    return view('misi');
});

Route::get('/information', function(){
    return view('information');
});

Route::get('/complain', function(){
    return view('complain');
});

Route::get('/uploadComplain', function(){
    return view('uploadComplain');
});
Route::get('/register', [registerController::class, 'register'])->name('register');
Route::post('/register', [registerController::class, 'registerPost'])->name('register');

Route::post('/registerComplain', [complainController::class, 'registerPost'])->name('registerComplain');

Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/login', [loginController::class, 'loginPost'])->name('login');

Route::post('/loginComplain', [complainController::class, 'loginPost'])->name('loginComplain');

Route::get('/admin', [adminController::class, 'adminDashboard'])->name('adminDashboard');
Route::get('/upload', [uploadController::class, 'upload'])->name('upload');

Route::post('/create', [EditorController::class, 'store'])->name('create');
Route::post('/upload', [EditorController::class, 'uploadImage'])->name('ckeditor.upload');
Route::get('log', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
Route::get('/posting/{id}', [informationController::class, 'show'])->name('detail');

Route::post('/sendEmail', [emailController::class, 'sendEmail'])->name('send.email');
