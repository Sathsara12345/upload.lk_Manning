<x-app-layout>
    <x-slot name="header">
        <form action="{{ route('warehouse.select') }}" method="POST">
            @csrf
            <label for="warehouse-menu" class="font-semibold text-xl text-gray-800 leading-tight">Select Warehouse:</label>
            <select name="warehouse_id" id="warehouse-menu" class="font-semibold text-xl text-gray-800 leading-tight border rounded p-2">
                <option value="" disabled selected>Select Warehouse</option>
                @foreach($warehouses as $warehouse)
                    <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded">Submit</button>
        </form>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
