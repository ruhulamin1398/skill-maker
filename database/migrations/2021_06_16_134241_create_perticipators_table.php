<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerticipatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perticipators', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('number')->nullable();
            $table->string('email')->nullable();
            $table->string('pasport')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('occopation')->nullable();
            $table->string('training')->nullable();
            $table->string('enablers')->nullable();
            $table->string('payment_type')->nullable();
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
        Schema::dropIfExists('perticipators');
    }
}
