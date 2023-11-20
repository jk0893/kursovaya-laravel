<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\User;
use App\Models\Employee;
use App\Models\Order;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(75)->create();
        Product::factory(100)->create();
        Employee::factory(75)->create();
        $clients = Client::factory(75)->create();
        $orders = Order::factory(100)->create();

        foreach($orders as $order){
            $client_id = $clients->random(1)->pluck('id');
            $order->clients()->associate($client_id);
        }
        
    }
}
