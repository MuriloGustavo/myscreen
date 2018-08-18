<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->year('year');
            $table->integer('runtime');
            $table->double('rating', 3, 1);
            $table->string('image', 200)->nullable();
            $table->text('link');
            $table->text('description');
            $table->enum('genre', ['acao', 'animacao', 'aventura', 'comedia', 'drama', 'fantasia', 'ficcao', 'romance', 'suspense', 'terror']);
            $table->text('trailer');
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
        Schema::dropIfExists('movies');
    }
}
