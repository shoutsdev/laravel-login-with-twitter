<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTwittersTable extends Migration
{
    public function up()
    {
        Schema::create('twitters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('provider_user_id');
            $table->string('provider');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('twitters');
    }
}
