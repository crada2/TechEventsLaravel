<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('img');
            $table->integer('users_max')->default(1);
            $table->string('text');
            $table->dateTime('date_time');
            $table->boolean('ifEnrolled')->nullable();
            $table->foreignId('user_id')->nullable()->default(null);
            $table->timestamps();
            //$table->string('link')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
