<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\DotnetjobController;
use App\Models\Dotnetjob;

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
    $jobs = Dotnetjob::where('expiration_date', '>=', date('Y-m-d'))->get();
    return view('welcome', ['jobs' => $jobs]);
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::post('/subscribers', [SubscriberController::class, 'store'])->name('subscribers.store');

Route::post('/jobs', [DotnetjobController::class, 'store'])->middleware(['auth', 'admin'])->name('jobs.store');
Route::get('/jobs/create', [DotnetjobController::class, 'create'])->middleware(['auth', 'admin'])->name('jobs.create');



require __DIR__.'/auth.php';