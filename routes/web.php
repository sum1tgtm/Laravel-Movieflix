<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserAuth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|



Route::get('/movies', function () {
    return view('movies');
})->name('movies');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


*/

Route::get('/', [PagesController::class, 'home']);
// Route::get('/payment',function(){return view('pages.payment');})->name('payment');
Route::get('/payment',[PagesController::class,'payment'])->name('user.payment');

Route::middleware(['auth:sanctum', 'verified'])->get('/movies', [PagesController::class, 'movies'])->name('movies');


Route::view('auth.login', 'login');

Route::post('user',[UserAuth::class,'userLogin']);

// Route::post('user',[UserAuth::class,'userLogin']);
Route::get('pages/movies',[PagesController::class,'movies'])->name('pages.movies');

Route::prefix('admin')->group(function(){
    Route::get('/',[MovieController::class,'index'])->name('admin.home');
    Route::get('/add',[MovieController::class,'create'])->name('admin.add');
    Route::post('/store',[MovieController::class,'store'])->name('admin.store');
    Route::get('/edit/{movie_id}',[MovieController::class,'edit'])->name('admin.edit');
    Route::put('/update/{movie_id}',[MovieController::class,'update'])->name('admin.update');
    Route::get('/delete/{movie_id}',[MovieController::class,'destroy'])->name('admin.delete');

});


