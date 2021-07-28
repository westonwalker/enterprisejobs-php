<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\JobController;
use App\Models\Job;

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
    $jobs = Job::where('expiration_date', '>=', date('Y-m-d'))->get();
    return view('welcome', ['jobs' => $jobs]);
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/subscribers', [SubscriberController::class, 'store'])->name('subscribers.store');

// Route::post('/jobs', [JobsController::class, 'store'])->middleware(['auth'])->name('jobs.store');
Route::get('/jobs/create', [JobController::class, 'create'])->middleware(['auth'])->name('jobs.create');



require __DIR__.'/auth.php';
