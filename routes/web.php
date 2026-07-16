<?php

use Illuminate\Support\Facades\Route;

// Main Dashboard Landing Page
Route::get('/', function () {
    return view('dashboard.index');
});

// GitHub Page (Nasa loob ng github folder)
Route::get('/github', function () {
    return view('github.index'); // <-- Binago natin mula 'git' papuntang 'github.index'
});

// SSH Page (Nasa loob ng ssh folder)
Route::get('/ssh', function () {
    return view('ssh.index'); // <-- Binago natin mula 'ssh' papuntang 'ssh.index'
});

// Laravel Installation Page (Nasa loob ng laravel-install folder)
Route::get('/laravel-install', function () {
    return view('laravel-install.index');
});
// FileZilla Page (Nasa loob ng filezilla folder)
Route::get('/filezilla', function () {
    return view('filezilla.index');
});
// Fresh PC Setup Page
Route::get('/fresh-setup', function () {
    return view('fresh-setup.index');
});
// System Health Page
Route::get('/system-health', function () {
    return view('system-health.index');
});

