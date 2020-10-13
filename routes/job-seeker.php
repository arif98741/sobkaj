<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('job-seeker')->user();

    //dd($users);

    return view('job-seeker.home');
})->name('home');

