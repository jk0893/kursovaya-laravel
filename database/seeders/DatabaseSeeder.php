<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory(50)->create();
        Product::factory(50)->create();
        Employee::factory(50)->create();
        Client::factory(50)->create();
        Order::factory(50)->create();

    }
}
