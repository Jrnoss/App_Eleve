<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
 //   return view('welcome');
//});
Route::get("/", [testController::class, "index"]);
Route::get("/add_product",[FormController::class,"create"]);
Route::post("add_product",[FormController::class,"store"])->name("add_product");