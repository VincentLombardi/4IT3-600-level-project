<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\inventoryController;

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

Route::get('/', [landingController::class, 'thirtydaystotalusers']);



Route::get('/learn', function () {
    return view('learn');
});
Route::get('/faq', function () {
    return view('faq');
});

Route::get('/resources', function () {
    return view('resources');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});



Route::get('inprogress-orders', [ordersController::class, 'indexInProgress']
)->middleware(['auth'])->name('inprogress-orders');

Route::get('/completed-orders', [ordersController::class, 'indexCompleted']
)->middleware(['auth'])->name('completed-orders');

Route::get('add-order', [ordersController::class, 'create']
)->middleware(['auth'])->name('add-order');

Route::post('store-order', [ordersController::class, 'store']
)->middleware(['auth'])->name('store-order');

Route::get('edit-order/{id}', [ordersController::class, 'edit']
)->middleware(['auth'])->name('edit-order');

Route::get('remove-order/{id}', [inventoryController::class, 'remove']
)->middleware(['auth'])->name('remove-order');

Route::get('remove-multi-order', [ordersController::class, 'multidelete']
)->middleware(['auth'])->name('remove-multi-order');


Route::get('inventory', [inventoryController::class, 'index']
)->middleware(['auth'])->name('inventory');

Route::get('add-inventory', [inventoryController::class, 'create']
)->middleware(['auth'])->name('add-inventory');

Route::post('store-inventory', [inventoryController::class, 'store']
)->middleware(['auth'])->name('store-inventory');

Route::get('edit-inventory/{id}', [ordersController::class, 'edit']
)->middleware(['auth'])->name('edit-inventory');

Route::get('remove-inventory/{id}', [inventoryController::class, 'remove']
)->middleware(['auth'])->name('remove-inventory');


Route::get('/settings', function () {
    return view('admin.settings');
})->middleware(['auth', 'password.confirm'])->name('settings');

Route::get('/users', [usersController::class, 'showusers'])->middleware(['auth', 'verified'])->name('users');

Route::get('/profile', function () {
    return view('admin.profile');
})->middleware(['auth'])->name('profile');


require __DIR__.'/auth.php';
