<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;

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

/** set side bar active dynamic */
function set_active($route)
{
    if(is_array($route))
    {
        return is_array($request->path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active': '';
}

Route::get('/', function () {
  return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('home/action', [HomeController::class, 'action']);

Route::get('/roomdetails', function () {
    return view('roomdetails');
});
  
Route::get('/reservation', function () {
    return view('reservation');
});
   

//Admin routes
Route::prefix('admin')->name('admin.')->group(function(){

    Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('login');

    //Admin protected routes
    Route::middleware(['auth'])->group(function(){
        Route::post('logout', [AdminLoginController::class, 'logout'])->name('logout');
        Route::get('/', DashboardController::class)->name('home');
        Route::get('/dashboard', DashboardController::class)->name('home');
    });

});