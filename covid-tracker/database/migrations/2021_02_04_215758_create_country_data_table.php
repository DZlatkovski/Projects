<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_data', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('date');
            $table->integer('confirmed');
            $table->integer('active');
            $table->integer('deaths');
            $table->integer('recovered');
            $table->timestamps();
        });

        // Не може да се unsigned затоа што апито враќа и негативни бројки.
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country_data');
    }
}
