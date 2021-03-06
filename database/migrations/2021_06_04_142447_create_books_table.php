<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->Increments('id');
            $table->string('title');
            $table->string('image')->nullable();
            $table->integer('pages_num');
            $table->double('rate')->nullable();
            $table->text('description');
            $table->string('file');
            $table->integer('download_num')->nullable();
            $table->bigInteger('department_id')->nullable();
            $table->bigInteger('language_id')->nullable();;
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
        Schema::dropIfExists('books');
    }
}
