<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_guests', function (Blueprint $table) {
            $table->id('user-guest_id');
            $table->string('user-guest_name', 50)->nullable();
            $table->string('user-guest_surname', 50)->nullable();
            $table->string('user-guest_username', 50);
            $table->string('user-guest_email')->unique();
            $table->string('user-guest_password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_guests');
    }
}
