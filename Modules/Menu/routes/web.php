<?php

use Illuminate\Support\Facades\Route;
use Modules\Menu\Http\Controllers\MenuController;

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::resource('menus', MenuController::class)->names('menu');
// });


// Route::resource('/', MenuController::class)->names('menu');

Route::get('/', [MenuController::class, 'index'])->name('menu.index');
Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');
Route::get('/menus', [MenuController::class, 'MenuIndex'])->name('superadmin.menu.index');