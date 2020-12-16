<?php

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

use App\Http\Controllers\MenuController;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\LesController;

Route::get("/", [MenuController::class, "home"])->name("home");
Route::get("/about", [MenuController::class, "about"])->name("about");
Route::get("/contact", [MenuController::class, "contact"])->name("contact");
Route::get("/team", [MenuController::class, "team"])->name("team");
Route::get("/harga", [MenuController::class, "harga"])->name("harga");

Route::get("/ukm", [UkmController::class, "ukm"])->name("ukm");
Route::post("/ukm/proses", [UkmController::class, "proses"])->name("proses_ukm");

Route::get("/les", [LesController::class, "les"])->name("les");
Route::post("/les/proses", [LesController::class, "proses"])->name("proses_les");