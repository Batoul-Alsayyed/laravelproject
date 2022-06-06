<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;

//testing
// Route::get('/',[testController::class, 'showHi'])->name("show-Hi");
Route::get('/palindrome',[testController::class, 'palindrome'])->name("palindrome");
