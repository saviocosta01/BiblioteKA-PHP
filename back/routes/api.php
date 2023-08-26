<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/users", [UserController::class, "create"]);
Route::get("/users", [UserController::class, "list"]);
Route::patch("/users/{id}", [UserController::class, "update"]);
Route::delete("/users/{id}", [UserController::class, "remove"]);


Route::post("/auth", [AuthController::class, "login"]);
