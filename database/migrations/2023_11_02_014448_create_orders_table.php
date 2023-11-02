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
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->unsigned();
            // $table->foreign('products_id')->cascadeOnDelete()->cascadeOnDelete()->constrained('products');
            // $table->foreign('clients_id')->cascadeOnDelete()->cascadeOnDelete()->constrained('clients');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
        // $table->dropForeign('orders_products_id_foreign');
        // $table->dropForeign('orders_clients_id_foreign');
        // $table->dropIndex('orders_products_id_index');
        // $table->dropIndex('orders_clients_id_index');
        // $table->dropColumn('products_id');
        // $table->dropColumn('clients_id');
    }
};
