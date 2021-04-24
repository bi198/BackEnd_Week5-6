<?php
use App\Models;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TrainerController;

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

//Route::get('/companies', function () {
//    return view('companies');
//});
//Route::get('/trainer', function () {
//    return view('trainer');
//});
//Route::get('/search', function () {
//    return view('search');
//});
Route::get("/companies", [CompaniesController::class,'companies']);
Route::post("/search", [SearchController::class,'search'])->name('search');
Route::get("/trainers",[TrainerController::class,'trainers']);
