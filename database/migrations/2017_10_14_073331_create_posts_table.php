<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->integer('category_id')->unsigned();
            $table->string('title');
            $table->text('excerpt');
            $table->text('content');
            $table->text('price')->nullable();
            $table->string('image');
            $table->date('start_at');
            $table->date('end_at')->nullable();
            $table->integer('raw_id')->unsigned()->nullable();
            $table->text('source');
            $table->boolean('is_featured')->default(false)->index();
            $table->boolean('is_online')->default(false);
            $table->boolean('is_publish')->default(false)->index();
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')->on('categories')
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
        Schema::dropIfExists('posts');
    }
}
