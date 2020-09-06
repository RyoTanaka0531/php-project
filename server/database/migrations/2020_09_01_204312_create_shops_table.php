<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('shops')){
            Schema::create('shops', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string('name', 30);
                $table->string('description');
                $table->integer('address');
                $table->integer('time');
                $table->integer('tel');
                $table->string('manu');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
