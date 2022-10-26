<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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


Route::group([
    "prefix" => "category",
    "as" => "category."
], function(){
    Route::get("", [CategoryController::class, "index"])->name("index");
    Route::get("create", [CategoryController::class, "create"])->name("create");
    Route::put("store", [CategoryController::class, "store"])->name("store");
    Route::get("edit{id}", [CategoryController::class, "edit"])->name("edit");
    Route::patch("update{id}", [CategoryController::class, "update"])->name("update");
    Route::delete("delete{id}", [CategoryController::class, "destroy"])->name("delete");
}
);
