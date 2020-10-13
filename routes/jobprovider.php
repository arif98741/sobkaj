<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('jobprovider')->user();

    //dd($users);

    return view('jobprovider.home');
})->name('home');

