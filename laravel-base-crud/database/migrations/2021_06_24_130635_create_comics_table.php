<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
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
            $table->char('title', 100);
            $table->mediumText('description')->nullable();
            $table->mediumText('poster')->nullable();
            $table->float('price', 5, 2)->nullable();
            $table->char('series', 100)->nullable();
            $table->date('sale-date')->nullable();
            $table->char('type', 50)->nullable();
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
}
