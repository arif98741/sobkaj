<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('job-provider')->user();

    //dd($users);

    return view('job-provider.home');
})->name('home');

