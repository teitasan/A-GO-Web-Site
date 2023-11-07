<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liveinfo', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('liveTitle', 100);
            $table->string('livePlace', 100);
            $table->date('liveDate');
            $table->time('openTime');
            $table->time('startTime');
            $table->integer('ticketPrice');
            $table->integer('drinkPrice');
            $table->text('performer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Liveinfo');
    }
};
