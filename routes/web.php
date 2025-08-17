<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

// Student Routes
Route::get('/dashboard', function () {
    $role = request()->get('role', 'student');
    if ($role !== 'student') {
        return redirect('/dashboard?role=student');
    }
    return view('dashboard');
});

// Faculty Routes
Route::get('/faculty', function () {
    $role = request()->get('role', 'faculty');
    if ($role !== 'faculty') {
        return redirect('/faculty?role=faculty');
    }
    return view('faculty');
});

// Admin Routes
Route::get('/admin', function () {
    $role = request()->get('role', 'admin');
    if ($role !== 'admin') {
        return redirect('/admin?role=admin');
    }
    return view('admin');
});

// Shared Routes (accessible by all roles)
Route::get('/chatbot', function () {
    return view('chatbot');
});

Route::get('/summarization', function () {
    return view('summarization');
});

// Profile Routes
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/admin/profile', function () {
    return view('admin_profile');
});

Route::get('/faculty/profile', function () {
    return view('faculty_profile');
});

