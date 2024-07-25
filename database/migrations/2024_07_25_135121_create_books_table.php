<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // clé primaire incrémentale
            $table->string('title'); // champ title, obligatoire
            $table->string('author'); // champ author, obligatoire
            $table->integer('year'); // champ year, obligatoire
            $table->string('genre')->nullable(); // champ genre, facultatif
            $table->timestamps(); // champs created_at et updated_at automatiques
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
