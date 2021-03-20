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
/*
Route::middleware('auth')->group( function () {
    Route::get('/usercreate',[App\Http\Controllers\AdminController::class, 'show']);
    Route::get('/userstore',[App\Http\Controllers\AdminController::class, 'show']);
});
*/
Route::get('/user',[App\Http\Controllers\AdminController::class, 'user']);
Route::get('/usercreate',[App\Http\Controllers\AdminController::class, 'usercreate']);
Route::post('/userstore',[App\Http\Controllers\AdminController::class, 'userstore']);
Route::post('/userupdate/{id}',[App\Http\Controllers\AdminController::class, 'userupdate']);
Route::get('/edit-user/{id}',[App\Http\Controllers\AdminController::class, 'useredit']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/customerentry',[App\Http\Controllers\AdminController::class, 'customerentry']);
Route::post('/searchcustomer',[App\Http\Controllers\AdminController::class, 'searchcustomer']);
Route::get('/customercreate',[App\Http\Controllers\AdminController::class, 'customercreate']);
Route::post('/customerstore',[App\Http\Controllers\AdminController::class, 'customerstore']);
Route::get('/customeredit/{id}',[App\Http\Controllers\AdminController::class, 'customeredit']);
Route::post('/customerupdate/{id}',[App\Http\Controllers\AdminController::class, 'customerupdate']);
Route::get('/destroy/{id}',[App\Http\Controllers\AdminController::class, 'destroy']);


Route::get('/hsn',[App\Http\Controllers\AdminController::class, 'hsn']);
Route::post('/searchhsn',[App\Http\Controllers\AdminController::class, 'searchhsn']);
Route::get('/hsncreate',[App\Http\Controllers\AdminController::class, 'hsncreate']);
Route::post('/hsnstore',[App\Http\Controllers\AdminController::class, 'hsnstore']);
Route::get('/hsnedit/{id}',[App\Http\Controllers\AdminController::class, 'hsnedit']);
Route::post('/hsnupdate/{id}',[App\Http\Controllers\AdminController::class, 'hsnupdate']);
Route::get('/delete/{id}',[App\Http\Controllers\AdminController::class, 'delete']);


Route::get('/supplierentry',[App\Http\Controllers\AdminController::class, 'supplier']);
Route::post('/searchsupplier',[App\Http\Controllers\AdminController::class, 'searchsupplier']);
Route::get('/suppliercreate',[App\Http\Controllers\AdminController::class, 'suppliercreate']);
Route::post('/supplierstore',[App\Http\Controllers\AdminController::class, 'supplierstore']);
Route::get('/supplieredit/{id}',[App\Http\Controllers\AdminController::class, 'supplieredit']);
Route::post('/supplierupdate/{id}',[App\Http\Controllers\AdminController::class, 'supplierupdate']);
Route::get('/deletes/{id}',[App\Http\Controllers\AdminController::class, 'deletes']);



Route::get('/categoryentry',[App\Http\Controllers\AdminController::class, 'categoryentry']);
Route::post('/search',[App\Http\Controllers\AdminController::class, 'search']);
Route::get('/categorycreate',[App\Http\Controllers\AdminController::class, 'categorycreate']);
Route::post('/categorystore',[App\Http\Controllers\AdminController::class, 'categorystore']);
Route::post('/specificationstore',[App\Http\Controllers\AdminController::class, 'specificationstore']);
Route::get('/categoryedit/{id}',[App\Http\Controllers\AdminController::class, 'categoryedit']);
Route::post('/updatecs/{id}',[App\Http\Controllers\AdminController::class, 'updatecs']);
Route::get('/deleted/{id}',[App\Http\Controllers\AdminController::class, 'deleted']);


