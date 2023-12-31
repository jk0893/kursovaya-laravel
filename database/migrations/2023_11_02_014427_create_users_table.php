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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('user_avatar')->nullable();
            $table->foreignId('role_id')->constrained();
            $table->foreignId('employee_id')->nullable()->constrained();
            $table->foreignId('client_id')->nullable()->constrained();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('users')->insert([
            ['name'=> 'root', 'email' => 'root@gmail.com', 'password' => bcrypt('rootroot'), 'role_id' => 1]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId('role_id');
            $table->dropConstrainedForeignId('employee_id');
            $table->dropConstrainedForeignId('client_id');
        });
        Schema::dropIfExists('users');
    }
};
