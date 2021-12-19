<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->longText('last_education')->nullable();
            $table->longText('current_work')->nullable();
            $table->longText('address')->nullable();
            $table->longText('short_desctiption')->nullable();
            $table->longText('long_description' )->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**v
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainers');
    }
}
