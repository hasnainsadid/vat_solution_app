<?php

use App\Http\Controllers\Backend\OrganizationController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard.index');
        // return view('dashboard');
    })->name('dashboard');

    Route::resource('organizations', OrganizationController::class);
});