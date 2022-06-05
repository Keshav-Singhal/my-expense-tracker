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

Route::get('/expenses', [\App\Http\Controllers\ExpenseController::class, 'index']);

Route::get('/expenses/{expense}', [\App\Http\Controllers\ExpenseController::class, 'show']);

Route::get('/expenses/create/post', [\App\Http\Controllers\ExpenseController::class, 'create']); //shows create new expense form
Route::post('/expenses/create/post', [\App\Http\Controllers\ExpenseController::class, 'store']); //saves the created expense to the databse
Route::get('/expenses/{expense}/edit', [\App\Http\Controllers\ExpenseController::class, 'edit']); //shows edit expense form
Route::put('/expenses/{expense}/edit', [\App\Http\Controllers\ExpenseController::class, 'update']); //commits edited expense to the database 
Route::delete('/expenses/{expense}', [\App\Http\Controllers\ExpenseController::class, 'destroy']); //deletes expense from the database