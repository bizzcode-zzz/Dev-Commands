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
// CI/CD Automation Page (Nasa loob ng cicd folder)
Route::get('/cicd', function () {
    return view('cicd.index');
});
Route::get('/module-blueprint', function () {
    return view('module-blueprint.index');
});
Route::get('/security-features', function () {
    return view('security.index'); // ◄── 'security' folder + 'index' blade file
});
// Route para sa User Management
Route::get('/user-management', function () {
    return view('module-blueprint.user-management'); // ◄── Binago ang folder path
});

// Route para sa Logs Module
Route::get('/logs', function () {
    return view('module-blueprint.logs'); // ◄── Binago ang folder path
});
// 📊 ROUTE PARA SA REPORTS MODULE
Route::get('/reports', function () {
    return view('module-blueprint.reports');
});
// Route para sa React + Inertia Reviewer Page
Route::get('/react-inertia', function () {
    return view('react-inertia.index'); // Turo sa folder na react-inertia at file na index
})->name('react.inertia');

// Route para sa Hiwalay na React Installation & Deployment Guide Page
Route::get('/react-installation', function () {
    return view('react-inertia.installation'); // Turo sa folder na react-inertia at file na installation
})->name('react.installation');


// Route para sa WordPress Reviewer Page
Route::get('/wordpress', function () {
    return view('wordpress.index'); // Hahanapin ang wordpress folder at index.blade.php
})->name('wordpress.index');


// Route para sa Hiwalay na WordPress Online Store Guide Page
Route::get('/wordpress-store', function () {
    return view('wordpress.store'); // Turo sa folder na wordpress at file na store.blade.php
})->name('wordpress.store');


// Route para sa REST API Reviewer & Step-by-Step Guide Page
Route::get('/rest-api', function () {
    return view('rest-api.index'); // Turo sa folder na rest-api at file na index.blade.php
})->name('rest.api');


// Route para sa Developer Checks, Tools, at API Status Codes Blueprint Page
Route::get('/dev-checks', function () {
    return view('dev-checks.index'); // Hahanapin ang dev-checks folder at index.blade.php
})->name('dev.checks');


// Route para sa Hiwalay na ChatGPT Codex AI Management Page
Route::get('/chatgpt-codex', function () {
    return view('codex.index'); // 👈 Tinuturo na nito ang codex folder at index.blade.php file mo
})->name('chatgpt.codex');
