<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\{
    DentistController,
    UserController
};



Route::post('login', [UserController::class, 'login']);
     
Route::middleware('auth:api')->group( function () {
    Route::get('dentists', [DentistController::class, "list"]);
});
