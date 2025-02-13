<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;

class WarehouseController extends Controller
{
    public function index()
    {
        $warehouses = Warehouse::all(); // Fetch all warehouses
        return view('dashboard', compact('warehouses'));
    }

    public function show($id)
    {
        $warehouse = Warehouse::findOrFail($id);
        return view('warehouse.show', compact('warehouse'));
    }
}
