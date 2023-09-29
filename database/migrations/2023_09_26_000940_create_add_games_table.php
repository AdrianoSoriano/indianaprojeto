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
        Schema::create('add_games', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('image', 70);
            $table->text('description');
            $table->string('play_link', 100);
            $table->string('tags', 50);
            $table->string('icon', 70);
            $table->string('youtube', 100);
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');        
        });

        // Schema::table('users', function (Blueprint $table) {
        //     $table->unsignedBigInteger('user_id');
        //     $table->foreign('user_id')->references('id')->on('users');
        // });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('add_games', function (Blueprint $table) {
            $table->dropForeign('users_user_id_foreign');
            $table->dropColumn('user_id');
        });

        Schema::dropIfExists('add_games');
    }
};
