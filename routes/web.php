<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Registration;

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
    return abort(404);
});

Route::get('/dashboard', function () {
    $registrations = Registration::all();
    return view('dashboard', compact('registrations'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/{token}/register', [App\Http\Controllers\RegistrationController::class, 'create'])
    ->middleware(['guest', 'check.token'])
    ->name('registrations.create');

Route::post('/{token}/register', [App\Http\Controllers\RegistrationController::class, 'store'])
    ->middleware(['guest', 'check.token'])
    ->name('registrations.store');

Route::get('/registration/success', [App\Http\Controllers\RegistrationController::class, 'success'])
    ->middleware(['guest'])
    ->name('registrations.success');

require __DIR__.'/auth.php';
