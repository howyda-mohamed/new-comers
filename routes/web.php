<?php

use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\SquadController;
use App\Http\Controllers\Admin\UniversityController;
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
})->name('dashboard');
define('PAGINATION_COUNT','10');
Route::group(['prefix'=>'admin','middleware'=>['auth','auth-guard']],function()
{
    Route::get('/',[DashboardController::class,'getDashboard'])->name('admin.dashboard');
    Route::group(['prefix'=>'university'],function(){
        Route::get('/',[UniversityController::class,'index'])->name('admin.universities');
        Route::get('/create',[UniversityController::class,'create'])->name('admin.universities.create');
        Route::post('/store',[UniversityController::class,'store'])->name('admin.universities.store');
        Route::get('/delete/{id}',[UniversityController::class,'destroy'])->name('admin.universities.delete');
    });
    Route::group(['prefix'=>'countries'],function(){
        Route::get('/',[CountryController::class,'index'])->name('admin.Countries');
        Route::get('/create',[CountryController::class,'create'])->name('admin.countries.create');
        Route::post('/store',[CountryController::class,'store'])->name('admin.countries.store');
        Route::get('/delete/{id}',[CountryController::class,'destroy'])->name('admin.countries.delete');
    });
    Route::group(['prefix'=>'faculties'],function(){
        Route::get('/',[FacultyController::class,'index'])->name('admin.faculties');
        Route::get('/create',[FacultyController::class,'create'])->name('admin.faculties.create');
        Route::post('/store',[FacultyController::class,'store'])->name('admin.faculties.store');
        Route::get('/delete/{id}',[FacultyController::class,'destroy'])->name('admin.faculties.delete');
    });
    Route::group(['prefix'=>'locations'],function(){
        Route::get('/',[LocationController::class,'index'])->name('admin.locations');
        Route::get('/create',[LocationController::class,'create'])->name('admin.locations.create');
        Route::post('/store',[LocationController::class,'store'])->name('admin.locations.store');
        Route::get('/delete/{id}',[LocationController::class,'destroy'])->name('admin.locations.delete');
    });
    Route::group(['prefix'=>'notifications'],function(){
        Route::get('/',[NotificationController::class,'index'])->name('admin.notifications');
        Route::get('/create',[NotificationController::class,'create'])->name('admin.notifications.create');
        Route::post('/store',[NotificationController::class,'store'])->name('admin.notifications.store');
        Route::get('/delete/{id}',[NotificationController::class,'destroy'])->name('admin.notifications.delete');
    });
    Route::group(['prefix'=>'Squads'],function(){
        Route::get('/',[SquadController::class,'index'])->name('admin.squads');
        Route::get('/create',[SquadController::class,'create'])->name('admin.squads.create');
        Route::post('/store',[SquadController::class,'store'])->name('admin.squads.store');
        Route::get('/delete/{id}',[SquadController::class,'destroy'])->name('admin.squads.delete');
    });
});

