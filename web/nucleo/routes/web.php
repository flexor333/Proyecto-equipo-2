<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UsuarioPatientController;
use App\Http\Controllers\PatientUser;
use App\Http\Controllers\DoctorUserController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CitaController;

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
    return view('welcome');
});

Route::view('/doc', 'doctores');
Route::view('/acer', 'acercade');
Route::view('/ubi', 'ubicacion');
Route::view('/can', 'news/cancer');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');






Route::controller(App\Http\Controllers\PatientUser::class)->group(function () {
    Route::resource('Usupaciente', PatientUser::class);
    Route::get('/Usupaciente', 'index')->middleware(['auth', 'verified'])->name('Usupaciente');
});
Route::controller(App\Http\Controllers\DoctorUserController::class)->group(function () {
    Route::resource('Usudoctor', DoctorUserController::class);
    Route::get('/Usudoctor', 'index')->middleware(['auth', 'verified'])->name('Usudoctor');
});
Route::controller(App\Http\Controllers\AdminUserController::class)->group(function () {
    Route::resource('Usuadmin', AdminUserController::class);
    Route::get('/Usuadmin', 'index')->middleware(['auth', 'verified'])->name('Usuadmin');
});





Route::controller(App\Http\Controllers\PatientController::class)->group(function () {
    Route::resource('paciente', PatientController::class);
    Route::get('/paciente', 'index')->middleware(['auth', 'verified'])->name('paciente');
});

Route::controller(App\Http\Controllers\DoctorController::class)->group(function () {
    Route::resource('doctor', DoctorController::class);
    Route::get('/doctor', 'index')->middleware(['auth', 'verified'])->name('doctor');
});

Route::controller(App\Http\Controllers\AdminController::class)->group(function () {
    Route::resource('admin', AdminController::class);
    Route::get('/admin', 'index')->middleware(['auth', 'verified'])->name('admin');
});

Route::controller(App\Http\Controllers\CitaController::class)->group(function(){
    Route::resource('cita',CitaController::class);
    Route::get('/cita','index')->middleware(['auth', 'verified'])->name('cita');
});









require __DIR__ . '/auth.php';
