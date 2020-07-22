<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGuitar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guitars', function (Blueprint $table) {
            $table->id();
            $table->String ('name');
            $table->String ('image');
            $table->String ('typer');
            $table->String ('quantity');
            $table->String ('specifications');
            $table->String ('old_price');
            $table->String ('new_price');
            $table->String ('made_in');
            // $table->String ('discount');
            $table->foreignId('product_id')->references('id')->on('guitars')->onDelete('cascade');
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
        Schema::dropIfExists('guitars');
    }
}
