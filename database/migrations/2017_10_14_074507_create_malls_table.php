<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('malls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->timestamps();
        });

        Schema::create('mall_post', function (Blueprint $table) {
            $table->integer('mall_id')->unsigned();
            $table->integer('post_id')->unsigned();

            $table->foreign('mall_id')
                ->references('id')->on('malls')
                ->onDelete('cascade');
            $table->foreign('post_id')
                ->references('id')->on('posts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mall_post');
        Schema::dropIfExists('malls');
    }
}
