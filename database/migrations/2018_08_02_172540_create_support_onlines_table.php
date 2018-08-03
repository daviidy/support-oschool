<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportOnlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_onlines', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->default('2018-06-11');
            $table->string('formation')->default('Développeur Web');
            $table->string('email')->default('yaodavidarmel@gmail.com');
            $table->string('nom')->default('Yao');
            $table->string('prenoms')->default('David');
            $table->double('tel')->default('58450600');
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
        Schema::dropIfExists('support_onlines');
    }
}
