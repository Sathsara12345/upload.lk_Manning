<x-app-layout>
    <x-slot name="header">
        <select id="warehouse-menu" class="font-semibold text-xl text-gray-800 leading-tight border rounded p-2">
            <option value="" disabled selected>Select Warehouse</option>
            @foreach($warehouses as $warehouse)
                <option value="{{ route('warehouse.show', $warehouse->id) }}">{{ $warehouse->name }}</option>
            @endforeach
        </select>
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

    <script>
        document.getElementById("warehouse-menu").addEventListener("change", function() {
            window.location.href = this.value;
        });
    </script>
</x-app-layout>
