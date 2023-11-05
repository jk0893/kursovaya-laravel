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
        });

        DB::table('categories')->insert([
            ['name'=> 'Видеокарты'],
            ['name'=> 'Материнские платы'],
            ['name'=> 'Процессоры'],
            ['name'=> 'Оперативная память'],
            ['name'=> 'Блоки питания'],
            ['name'=> 'Накопители'],
            ['name'=> 'Охлаждение'],
            ['name'=> 'Корпусы'],
            ['name'=> 'Мониторы'],
            ['name'=> 'Клавиатуры'],
            ['name'=> 'Мыши'],
            ['name'=> 'Готовые сборки']
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
