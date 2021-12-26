<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolls', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('participator_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('seminar_id');
            $table->unsignedBigInteger('user_id');
            $table->double('price',8,2);
            $table->string('payment_method');
            $table->string('payment_Comment');
            $table->string('is_due');

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
        Schema::dropIfExists('enrolls');
    }
}
