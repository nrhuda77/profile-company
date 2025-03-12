<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelamarController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
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


Route::get('/', function () { 
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/recruitment', function () {
    return view('recruitment/index');
});

Route::get('/login-recruitment', [AuthController::class, 'login']);
Route::get('/register-recruitment', [AuthController::class, 'register']);
Route::post('/create-register', [AuthController::class, 'store']);
Route::post('/login-recruitment', [AuthController::class, 'authenticate'])->name('login');
Route::get('/logout-recruitment', [AuthController::class, 'logout']);

Route::get('/dashboard', [PelamarController::class, 'dashboard'])->middleware('auth:pelamar');
Route::get('/lamaran-pekerjaan', [PelamarController::class, 'index'])->middleware('auth:pelamar');
Route::post('/save-data-pelamar', [PelamarController::class, 'store'])->middleware('auth:pelamar');

Route::get('/cv/{filename}', function ($filename) {
    // Pastikan pengguna sudah login
    if (Auth::check()) {
        // Tentukan lokasi file
        $filePath = public_path('cv/' . $filename);
        
        // Pastikan file ada
        if (File::exists($filePath)) {
            return response()->file($filePath);
        } else {
            abort(404);  // Jika file tidak ditemukan
        }
    } else {
        return redirect()->route('login');  // Arahkan ke halaman login jika belum login
    }
})->middleware('auth:pelamar');
