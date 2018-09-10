<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AssignGallery', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_gallery')->foreign('id_gallery')->references('id')->on('gallery')->onDelete('cascade');
            $table->unsignedInteger('id_user')->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->integer('start');
            $table->integer('end');
            $table->text('note');
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
        Schema::dropIfExists('AssignGallery');
    }
}
