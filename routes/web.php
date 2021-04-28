<?php

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

//Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('/', function (){
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/** =========== ADMIN SIDE ==================== */
Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('abo.admin.index');

/** =========== ADMIN SIDE ==================== */
Route::get('/operator', [App\Http\Controllers\Operator\OperatorController::class, 'index'])->name('abo.operator.index');
Route::get('/operator/order', [App\Http\Controllers\Operator\OrderController::class, 'addForm'])->name('abo.operator.order.addForm');
