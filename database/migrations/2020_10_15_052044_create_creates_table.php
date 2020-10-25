<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('gender');
            $table->string('phonenumber')->unique();
            $table->string('address');
            $table->string('car');
            $table->string('carbrand');
            $table->string('carmodel');
            $table->string('carcolor');
            $table->string('carnumber')->unique();
            $table->string('carinparking');
            $table->string('carismissing');
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
        Schema::dropIfExists('creates');
    }
}
