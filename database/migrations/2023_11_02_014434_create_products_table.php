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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('name')->unique();
            $table->unsignedInteger('count');
            // $table->foreign('categories_id')->cascadeOnDelete()->cascadeOnDelete()->constrained('categories');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        // $table->dropForeign('products_category_id_foreign');
        // $table->dropIndex('products_category_id_index');
        // $table->dropColumn('category_id');
    }
};
