<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Menu;

class OrderItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $order = Order::first(); // Assuming there's at least one order
    $menu = Menu::first(); // Assuming there's at least one menu item

    OrderItem::create([
        'order_id' => $order->id,
        'menu_id' => $menu->id,
        'quantity' => 2,
    ]);
    }
}
