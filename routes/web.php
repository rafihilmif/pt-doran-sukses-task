<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/'], function () {
    Route::get('dashboard', [ItemController::class, 'index'])->name('index');

    Route::get('create', [ItemController::class, 'create'])->name('create');
    Route::post('create', [ItemController::class, 'store'])->name('doStore');

    Route::get('detail/{item_id}', [ItemController::class, 'show'])->name('doShow');

    Route::get('update/{item_id}', [ItemController::class, 'edit'])->name('edit');
    Route::put('update/{item_id}', [ItemController::class, 'update'])->name('doUpdate');

    Route::delete('delete/{item_id}', [ItemController::class, 'destroy'])->name('doDestroy');
});