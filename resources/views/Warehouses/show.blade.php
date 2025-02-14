@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Warehouse Details</h1>

        <!-- Table to display warehouse details -->
        <table class="table-auto border-collapse border border-gray-200 w-full">
            <thead>
                <tr>
                    <th class="border border-gray-300 p-2">ID</th>
                    <th class="border border-gray-300 p-2">Name</th>
                    <th class="border border-gray-300 p-2">Supplier Code</th>
                    <th class="border border-gray-300 p-2">Packs</th>
                    <th class="border border-gray-300 p-2">Item Name</th>
                    <th class="border border-gray-300 p-2">Lorry No.</th>
                    <th class="border border-gray-300 p-2">Weight</th>
                    <th class="border border-gray-300 p-2">Weight Balance</th>
                    <th class="border border-gray-300 p-2">Total Sales as Per</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 p-2">{{ $warehouse->id }}</td>
                    <td class="border border-gray-300 p-2">{{ $warehouse->name }}</td>
                    <td class="border border-gray-300 p-2">{{ $warehouse->supplier_code ?? 'N/A' }}</td>
                    <td class="border border-gray-300 p-2">{{ $warehouse->packs ?? 'N/A' }}</td>
                    <td class="border border-gray-300 p-2">{{ $warehouse->item_name ?? 'N/A' }}</td>
                    <td class="border border-gray-300 p-2">{{ $warehouse->lorry_no ?? 'N/A' }}</td>
                    <td class="border border-gray-300 p-2">{{ $warehouse->weight ?? 'N/A' }}</td>
                    <td class="border border-gray-300 p-2">{{ $warehouse->weight_balance ?? 'N/A' }}</td>
                    <td class="border border-gray-300 p-2">${{ $warehouse->total_sales_as_per ?? '0.00' }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
