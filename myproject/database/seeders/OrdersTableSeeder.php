<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;
use App\Models\Table;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first(); // Assuming you have at least one user
    $table = Table::first(); // Assuming you have at least one table

    Order::create([
        'user_id' => $user->id,
        'table_id' => $table->id,
        'status' => 'pending',
    ]);
    }
}
