<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();

            $table->string('street');
            $table->unsignedInteger('street_number');
            $table->string('zipcode');
            $table->string('city');
            $table->foreignId('user_id');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_addresses');
    }
};
