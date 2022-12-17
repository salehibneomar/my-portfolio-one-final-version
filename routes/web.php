<?php

// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

require __DIR__.'/frontend.php';

Route::middleware('prevent-back')->group(function(){

    require __DIR__.'/auth.php';
    
    require __DIR__.'/backend.php';

});

// Route::get('/generate-hash-password', function(){
//     $pass = Hash::make('12345678');
//     return $pass;
// });

