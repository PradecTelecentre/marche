<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', '150');
            $table->integer('quantity');
            $table->string('description', '250')->nullable();
            $table->integer('prix');
            $table->string('image', '250');
            $table->string('nom', '100');
            $table->integer('number1');
            $table->integer('number2')->nullable();
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
        Schema::dropIfExists('marches');
    }
}
