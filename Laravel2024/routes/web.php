<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add/{num1}/{num2}', function($num1, $num2){
    $result = $num1 + $num2;
    return "The sum is $result";
});

Route::get('/marks/{marks}', function($marks){
    if($marks < 40 && $marks >= 0){
        return "Fail";
    }else if($marks >= 40 && $marks < 60){
        return "Grade C";
    }else if($marks >= 60 && $marks < 80){
        return "Grade B";
    }else if($marks >= 80 && $marks <= 100){
        return "Grade A";
    }else{
        return "Bad request";
    }
});

Route::get('test/{name}/{profile}', function($name, $profile){
    return view('test', [
        'name' => $name,
        'profile' => $profile
    ]);
});

// Route::view('test', 'test');