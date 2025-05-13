<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;


class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
        'name' => 'Pizza Margherita',
        'description' => 'Classic Margherita pizza with fresh mozzarella and basil.',
        'price' => 9.99,
    ]);
    Menu::create([
        'name' => 'Pasta Carbonara',
        'description' => 'Classic carbonara pasta with pancetta and egg.',
        'price' => 12.99,
    ]);
    }
}
