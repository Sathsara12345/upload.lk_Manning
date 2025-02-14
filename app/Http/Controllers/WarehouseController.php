<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;

class WarehouseController extends Controller
{
    public function index()
    {
        $warehouses = Warehouse::all(); // Fetch all warehouses
        return view('warehouses.index', compact('warehouses'));
    }

    public function selectWarehouse(Request $request)
    {
        $warehouseId = $request->input('warehouse_id');

        if (!$warehouseId) {
            return redirect()->back()->with('error', 'Please select a warehouse.');
        }

        $warehouse = Warehouse::find($warehouseId);

        if (!$warehouse) {
            return redirect()->back()->with('error', 'Warehouse not found.');
        }

        return redirect()->route('warehouse.show', $warehouse->id)
            ->with('success', 'Warehouse selected successfully!');
    }
    public function showTable($warehouseId)
{
    // Fetch the warehouse based on the ID
    $warehouse = Warehouse::find($warehouseId);
    
    // If the warehouse doesn't exist, handle it gracefully
    if (!$warehouse) {
        return redirect()->route('home')->with('error', 'Warehouse not found.');
    }

    // Fetch products associated with the selected warehouse
    $products = Product::where('warehouse_id', $warehouseId)->get();

    // Return the view with the products
    return view('warehouses.table', compact('products', 'warehouse'));
}
public function show($id)
{
    $warehouse = Warehouse::find($id);

    // If warehouse doesn't exist, return an error
    if (!$warehouse) {
        return response()->json(['message' => 'Warehouse not found'], 404);
    }

    // Return the view with warehouse data
    return view('warehouses.show', compact('warehouse'));
}
}
