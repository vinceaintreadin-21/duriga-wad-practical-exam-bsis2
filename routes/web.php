<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'showAllUsers'])->name('showAllUsers');


Route::get('/create-users', [UserController::class, 'createUser'])->name('createUser');
Route::post('/users/store', [UserController::class, 'storeUser'])->name('storeUser');

//requirments
//Crud User Resource

//createUser = Create
//viewUser = Read
//editUser = Update


//User Model
//name
//email
//birthdate
//status(ative, inactive)
//address
//contact_number

//Route -> Controller -> View -> Model -> Migration -> Factory -> Seeder -> View (with Data)

