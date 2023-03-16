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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->string('thumb')->default('https://static.posters.cz/image/1300/poster/dc-comics-rebirth-i80856.jpg')->nullable();
            $table->string('price', 10);
            $table->string('series');
            $table->string('sale_date');
            $table->string('type');
            $table->mediumText('artists')->nullable();
            $table->mediumText('writers')->nullable();
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
        Schema::dropIfExists('comics');
    }
};