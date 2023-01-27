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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('hospital_no')->unique()->nullable();
            $table->string('first_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('gender', 1)->nullable();
            $table->string('phone')->nullable();
            $table->date('dob')->nullable();
            $table->string('age')->nullable();
            $table->string('occupation')->nullable();
            $table->string('address')->nullable();
            $table->string('tribe')->nullable();
            $table->string('religion', 1)->nullable();
            $table->string('lga')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->unsignedBigInteger('next_of_kin_id')->nullable();
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
        Schema::dropIfExists('patients');
    }
};
