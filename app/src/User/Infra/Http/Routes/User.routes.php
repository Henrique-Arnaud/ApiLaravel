<?php
namespace App\src\User\Infra\Http\Routes;

use App\src\User\Infra\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post("/", [UserController::class, "createUser"]);
Route::get("/{id}", [UserController::class, "getUserById"]);
Route::delete("/{id}", [UserController::class, "deleteUser"]);
Route::put("/{id}", [UserController::class, "updateUser"]);
