@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Warehouse: {{ $warehouse->name }}</h1>

        <h2>Warehouse Details</h2>

        <!-- Table to display the details -->
        <table class="table-auto border-collapse border border-gray-200 w-full">
            <thead>
                <tr>
                    <th class="border border-gray-300 p-2 text-left">Supplier Code</th>
                    <th class="border border-gray-300 p-2 text-left">Packs</th>
                    <th class="border border-gray-300 p-2 text-left">Item Name</th>
                    <th class="border border-gray-300 p-2 text-left">Lorry No.</th>
                    <th class="border border-gray-300 p-2 text-left">Weight</th>
                    <th class="border border-gray-300 p-2 text-left">Weight Balance</th>
                    <th class="border border-gray-300 p-2 text-left">Total Sales as Per</th>
                </tr>
            </thead>
            <tbody>
                @forelse($warehouse->products as $product) <!-- assuming the products relationship is set up -->
                    <tr>
                        <td class="border border-gray-300 p-2">{{ $product->supplier_code }}</td>
                        <td class="border border-gray-300 p-2">{{ $product->packs }}</td>
                        <td class="border border-gray-300 p-2">{{ $product->item_name }}</td>
                        <td class="border border-gray-300 p-2">{{ $product->lorry_no }}</td>
                        <td class="border border-gray-300 p-2">{{ $product->weight }}</td>
                        <td class="border border-gray-300 p-2">{{ $product->weight_balance }}</td>
                        <td class="border border-gray-300 p-2">${{ number_format($product->total_sales_as_per, 2) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="border border-gray-300 p-2 text-center">No products available</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
