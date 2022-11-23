<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::get('', 'FrontendController@index')->name('index');
    Route::get('about', 'FrontendController@about')->name('about');
    Route::get('doctor', 'FrontendController@doctor')->name('doctor');
    Route::get('services', 'FrontendController@services')->name('services');
    Route::get('blogs', 'FrontendController@blogs')->name('blogs');
    Route::get('faqs', 'FrontendController@faqs')->name('faqs');
    Route::get('contact', 'FrontendController@contact')->name('contact');
});