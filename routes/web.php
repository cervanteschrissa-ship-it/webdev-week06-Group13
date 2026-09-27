<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $announcements = [
        'Welcome to our new site!',
        'Assignment deadline extended to Friday.',
        'Don\'t forget to check the syllabus.',
    ];
    return view('home', ['announcements' => $announcements]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});