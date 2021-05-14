<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeschenklisteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geschenkliste', function (Blueprint $table) {
            $table->id();
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreignId('users_id')->nullable();
            $table->string('gift');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geschenkliste');
    }
}
