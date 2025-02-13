<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('warehouses')->insert([
            ['name' => 'warehouse1'],
            ['name' => 'warehouse2'],
            ['name' => 'warehouse3'],
            ['name' => 'warehouse4'],
        ]);
    }
}
