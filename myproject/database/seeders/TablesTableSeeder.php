<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Table;


class TablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          Table::create([
        'number' => 1,
        'capacity' => 4,
    ]);
    Table::create([
        'number' => 2,
        'capacity' => 2,
    ]);
    }
}
