<?php

Route::namespace('Admin')->group(function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::resource('service-type', 'ServiceTypeController')->except('show');
    Route::get('setting', 'AdminController@setting')->name('setting');
});
