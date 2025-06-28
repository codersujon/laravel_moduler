<?php

use Illuminate\Support\Facades\Route;
use Modules\Menu\Http\Controllers\MenuController;

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::resource('menus', MenuController::class)->names('menu');
// });


Route::resource('menus', MenuController::class)->names('menu');

Route::get('/superadmin/menu/', [MenuController::class, 'MenuIndex'])->name('superadmin.menu.index');