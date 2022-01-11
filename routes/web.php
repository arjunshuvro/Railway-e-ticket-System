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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/purchase/{id}',[App\Http\Controllers\PurchaseController::class, 'show'])->name('purchase.show');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::middleware(['auth','admin'])->prefix('/panel')->group(function () {
    Route::get('/driver',[App\Http\Controllers\DriverController::class, 'index'])->name('driver.index');
    Route::get('/driver/add',[App\Http\Controllers\DriverController::class, 'create'])->name('driver.create');
    Route::post('/driver/add',[App\Http\Controllers\DriverController::class, 'store'])->name('driver.store');
    Route::get('/driver/edit/{id}',[App\Http\Controllers\DriverController::class, 'edit'])->name('driver.edit');
    Route::put('/driver/edit/{id}',[App\Http\Controllers\DriverController::class, 'update'])->name('driver.update');

    Route::get('/route',[App\Http\Controllers\RouteController::class, 'index'])->name('route.index');
    Route::get('/route/add',[App\Http\Controllers\RouteController::class, 'create'])->name('route.create');
    Route::get('/route/{id}',[App\Http\Controllers\RouteController::class, 'show'])->name('route.show');
    Route::post('/route/add',[App\Http\Controllers\RouteController::class, 'store'])->name('route.store');
    Route::get('/route/edit/{id}',[App\Http\Controllers\RouteController::class, 'edit'])->name('route.edit');
    Route::put('/route/edit/{id}',[App\Http\Controllers\RouteController::class, 'update'])->name('route.update');

    Route::get('/train',[App\Http\Controllers\TrainController::class, 'index'])->name('train.index');
    Route::get('/train/add',[App\Http\Controllers\TrainController::class, 'create'])->name('train.create');
    Route::post('/train/add',[App\Http\Controllers\TrainController::class, 'store'])->name('train.store');
    Route::get('/train/edit/{id}',[App\Http\Controllers\TrainController::class, 'edit'])->name('train.edit');
    Route::put('/train/edit/{id}',[App\Http\Controllers\TrainController::class, 'update'])->name('train.update');

    Route::get('/ticket',[App\Http\Controllers\TicketController::class, 'index'])->name('ticket.index');
    Route::get('/ticket/add',[App\Http\Controllers\TicketController::class, 'create'])->name('ticket.create');
    Route::post('/ticket/add',[App\Http\Controllers\TicketController::class, 'store'])->name('ticket.store');
    Route::get('/ticket/edit/{id}',[App\Http\Controllers\TicketController::class, 'edit'])->name('ticket.edit');
    Route::put('/ticket/edit/{id}',[App\Http\Controllers\TicketController::class, 'update'])->name('ticket.update');
    Route::put('/ticket/edit/{id}',[App\Http\Controllers\TicketController::class, 'update'])->name('ticket.update');

    Route::get('/purchasehistory',[App\Http\Controllers\PurchaseController::class, 'history'])->name('purchase.history');

});
Route::middleware(['auth'])->prefix('/panel')->group(function () {
    Route::get('/',[App\Http\Controllers\PanelController::class, 'index'])->name('panel');
    Route::get('/purchase',[App\Http\Controllers\PurchaseController::class, 'index'])->name('purchase.index');
    Route::get('/purchase/add',[App\Http\Controllers\PurchaseController::class, 'create'])->name('purchase.create');
    Route::post('/purchase/add',[App\Http\Controllers\PurchaseController::class, 'store'])->name('purchase.store');
    Route::get('/route/{id}/trains',[App\Http\Controllers\RouteController::class, 'showTrain'])->name('route.trains');
    Route::get('/train/{id}/tickets',[App\Http\Controllers\TrainController::class, 'showTicket'])->name('train.ticket');
});