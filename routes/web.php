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

/** =========== OPERATOR SIDE ==================== */
Route::get('/operator', [App\Http\Controllers\Operator\OperatorController::class, 'index'])
    ->name('abo.operator.index');
Route::get('/operator/order', [App\Http\Controllers\Operator\OrderController::class, 'addForm'])->name('abo.operator.order.addForm');
Route::get('/operator/save', [App\Http\Controllers\Operator\OrderController::class, 'saveOrder'])->name('abo.operator.order.saveOrder');

/** =========== COURIER SIDE ==================== */
Route::get('/courier', [App\Http\Controllers\Courier\CourierController::class, 'index'])->name('abo.courier.index');
Route::get('/courier/show', [App\Http\Controllers\Courier\CourierController::class, 'showCouriers'])->name('abo.courier.show');
Route::get('/courier/routesForm', [App\Http\Controllers\Courier\CourierController::class, 'routesForm'])->name('abo.courier.routesForm');
Route::get('/courier/courierForm', [App\Http\Controllers\Courier\CourierController::class, 'courierForm'])->name('abo.courier.courierForm');
Route::get('/courier/enterCourier', [App\Http\Controllers\Courier\CourierController::class, 'enterCourier'])->name('abo.courier.enterCourier');


/** =========== STORE SIDE ==================== */
Route::get('/store', [App\Http\Controllers\Store\StoreController::class, 'index'])->name('abo.store.index');
Route::get('/store/check/{order_code}', [App\Http\Controllers\Store\StoreController::class, 'check'])->name('abo.store.check');
