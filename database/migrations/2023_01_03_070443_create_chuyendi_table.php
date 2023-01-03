<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuyendi', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('category');
            $table->string('destination');
            $table->date('date_trip');
            $table->integer('risk')->default(0);
            $table->string('description')->default('null');
            $table->integer('expense');
            $table->integer('total');
            $table->date('deadline');

            $table->string('comment')->default('null');

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
        Schema::dropIfExists('chuyendi');
    }
};