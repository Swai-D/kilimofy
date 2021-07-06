<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedInteger('User_id');
            $table->string('Heading')->nullable();
            $table->string('Description');
            $table->string('Media')->nullable();
            $table->string('Tag1')->nullable();
            $table->string('Tag2')->nullable();
            $table->string('Tag3')->nullable();
            $table->string('Tag4')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
