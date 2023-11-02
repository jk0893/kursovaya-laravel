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
            $table->string('username')->unique();
            $table->string('password');
            $table->text('avatar')->nullable();
            // $table->foreign('clients_id')->cascadeOnUpdate()->cascadeOnDelete()->constrained('clients');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('users')->insert(
            array(
                'username'=>'testusername',
                'password'=>'testpassword',
                'avatar'=>'testavatarpath'
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        // $table->dropForeign('users_clients_id_foreign');
        // $table->dropColumn('clients_id');
    }
};