<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;


//palindrome 
//Route::get('/palindrome',[testController::class, 'palindrome'])->name("palindrome");

//
Route::get('/',[testController::class, 'secondsPassed'])->name("seconds-Passed");
