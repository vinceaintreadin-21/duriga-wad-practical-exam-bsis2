<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'showAllUsers'])->name('showAllUsers');


Route::get('/create-users', [UserController::class, 'createUser'])->name('createUser');

Route::post('/users/store', [UserController::class, 'storeUser'])->name('storeUser');

Route::get('/users/{id}', [UserController::class, 'showUser'])->name('showUser');

Route::get('/users/{id}/edit', [UserController::class, 'editUser'])->name('editUser');

Route::put('/users/{id}/update', [UserController::class, 'updateUser'])->name('updateUser');

Route::delete('/users/{id}/delete', [UserController::class, 'deleteUser'])->name('deleteUser');

//requirments
//Crud User Resource

//createUser = Create
//viewUser = Read
//editUser = Update
//deleteUser = Delete

//User Model
//name
//email
//birthdate
//status(ative, inactive)
//address
//contact_number

//Route -> Controller -> View -> Model -> Migration -> Factory -> Seeder -> View (with Data)

#get all infos

Route::get('/info', [InfoController::class, 'getAllInfos'])->name('getAllInfos');

#get one info only
Route::get('/info/{id}', [InfoController::class, 'getOneInfo'])->name('getOneInfo');

#directory to creating info
Route::get('/create-info', [InfoController::class, 'createInfo'])->name('createInfo');

#store info after being created
Route::post('/info/store', [InfoController::class, 'storeInfo'])->name('storeInfo');

#editing the info
Route::get('/info/{id}/edit', [InfoController::class, 'editInfo'])->name('editInfo');

#updated info
Route::put('/info/{id}/update', [InfoController::class, 'updateInfo'])->name('updateInfo');

Route::delete('/info/{id}/delete', [InfoController::class, 'deleteInfo'])->name('deleteInfo');



























#getting all transactions
Route::get('/transactions', [TransactionController::class, 'getAllTransactions'])->name('getAllTransactions');

#viewing only one transaction
Route::get('/transactions/{id}', [TransactionController::class, 'getOneTransaction'])->name('getOneTransaction');

#creating a transaction
Route::get('/create-transaction', [TransactionController::class, 'createTransaction'])->name('createTransaction');

Route::post('/note/store', [TransactionController::class, 'storeTransaction'])->name('storeTransaction');

Route::get('/transactions/{id}/edit', [TransactionController::class, 'editTransaction'])->name('editTransaction');

Route::put('/transactions/{id}/update', [TransactionController::class, 'updateTransaction'])->name('updateTransaction');

Route::delete('/transactions/{id}/delete', [TransactionController::class, 'deleteTransaction'])->name('deleteTransaction');
