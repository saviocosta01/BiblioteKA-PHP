<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post("/users", [UserController::class, "create"]);
Route::get("/users", [UserController::class, "list"]);
Route::patch("/users/{id}", [UserController::class, "update"]);
Route::delete("/users/{id}", [UserController::class, "remove"]);

Route::post("/auth", [AuthController::class, "login"]);

Route::middleware('jwt.verify')->group(function () {
    Route::post("/books", [BookController::class, "create"]);
    Route::get("/books", [BookController::class, "list"]);
    Route::get("/books/{id}", [BookController::class, "listBook"]);
    Route::patch("/books/{id}", [BookController::class, "update"]);
    Route::delete("/books/{id}", [BookController::class, "remove"]);

    Route::post("/copies/{id}", [CopyController::class, "create"]);
    Route::get("/copies", [CopyController::class, "list"]);
    Route::get("/copies/{id}", [CopyController::class, "listCopy"]);
    Route::patch("/copies/{id}", [CopyController::class, "update"]);
    Route::delete("/copies/{id}", [CopyController::class, "remove"]);
});
