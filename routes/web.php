<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarehouseController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    // Dashboard route
    Route::get('/dashboard', [WarehouseController::class, 'index'])->name('dashboard');
    
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Warehouse routes
    Route::get('/warehouses', [WarehouseController::class, 'index'])->name('warehouses.index');
    Route::get('/warehouse/{id}', [WarehouseController::class, 'show'])->name('warehouse.show');
    Route::post('/warehouse/select', [WarehouseController::class, 'selectWarehouse'])->name('warehouse.select');
    Route::get('/warehouse/{warehouseId}/table', [WarehouseController::class, 'showTable'])->name('warehouse.table');
});

require __DIR__.'/auth.php';
