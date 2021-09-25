<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProgrammingLanguages extends Migration
{
    /**
     * Run the migrations.
     * ¿Qué va a crear/cambiar la migración?
     * @return void
     */
    public function up()
    {
        /*CREATE TABLE programming_languages(
            id int,
            name varchar.....
        )*/
        Schema::create('programming_languages', function (Blueprint $table) {
            /*En este punto se colocan todas las columnas de la tabla*/
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('release_year');
            $table->string('actual_version')->default('V1.0');
            $table->string('image')->nullable();
            /*Se agregan las columnas created_at y updated_at que Laravel administra*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Si debo reversar los cambios ¿Qué acciones debo tomar?
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programming_languages');
    }
}
