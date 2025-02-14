@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Warehouses List</h1>

        <form action="{{ route('warehouse.select') }}" method="POST">
    @csrf
    <label for="warehouse">Select a Warehouse:</label>
    <select id="warehouse" name="warehouse_id" class="border rounded p-2">
        <option value="" disabled selected>Select Warehouse</option>
        @foreach($warehouses as $warehouse)
            <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
        @endforeach
    </select>

    <!-- Styled Submit Button -->
    <button type="submit" class="border-2 border-black text-black px-4 py-2 rounded ml-2">
        Submit
    </button>
</form>


    </div>
@endsection
