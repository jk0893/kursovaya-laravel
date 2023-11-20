<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('shorts')->unique();
        });

        DB::table('categories')->insert([
            ['name'=> 'Видеокарты', 'shorts' => 'gpu'],
            ['name'=> 'Материнские платы', 'shorts' => 'mb'],
            ['name'=> 'Процессоры', 'shorts' => 'cpu'],
            ['name'=> 'Оперативная память', 'shorts' => 'ram'],
            ['name'=> 'Блоки питания', 'shorts' => 'psu'],
            ['name'=> 'Накопители', 'shorts' => 'ssd'],
            ['name'=> 'Охлаждение', 'shorts' => 'cool'],
            ['name'=> 'Корпусы', 'shorts' => 'case'],
            ['name'=> 'Мониторы', 'shorts' => 'monitor'],
            ['name'=> 'Клавиатуры', 'shorts' => 'kb'],
            ['name'=> 'Мыши', 'shorts' => 'mouse'],
            ['name'=> 'Готовые сборки', 'shorts' => 'premades']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
