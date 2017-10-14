<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raws', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipe', ['ig', 'banner', 'twitter', 'facebook'])->default('ig');

            $table->string('image');
            $table->text('content');
            $table->string('source');
            $table->string('unique_id')->unique();

            $table->boolean('is_read')->default(false);
            $table->boolean('is_exported')->default(false);
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
        Schema::dropIfExists('raws');
    }
}
