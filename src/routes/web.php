<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

// Route::get('/contact',function (){
//    return view('contact::contact');
// })->name('contact');

// Route::post('contact',function (Request $request) {
//    return $request->all();
// });



Route::get('contact',function(){
   return view('contact::contact');
})->name('contact');