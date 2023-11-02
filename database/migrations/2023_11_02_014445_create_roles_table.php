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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            // $table->foreign('employees_id')->cascadeOnDelete()->cascadeOnDelete()->constrained('employees');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
        // $table->dropForeign('roles_employees_id_foreign');
        // $table->dropIndex('roles_employees_id_index');
        // $table->dropColumn('employees_id');
    }
};
