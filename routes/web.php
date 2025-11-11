<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function (Request $request) {
    $res = Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ])->toResponse($request);

    $res->headers->set(
        'Cache-Control',
        'max-age=86400, public, stale-while-revalidate=3600'
    );

    return $res;
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
