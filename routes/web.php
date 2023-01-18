<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', [PageController::class, 'index'])->name('home');

//gruppo di route che puntano ad admin:
Route::middleware(['auth', 'verified'])
->name('admin.')
->prefix('admin')
->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('home');
});




require __DIR__.'/auth.php';

