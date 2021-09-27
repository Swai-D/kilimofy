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
            $table->LongText('Caption');
            $table->string('User_Name');
            $table->string('User_Image_Profile');
            $table->string('Photo')->nullable();
            $table->string('Video')->nullable();
            $table->string('Tag1')->nullable();
            $table->string('Tag2')->nullable();
            $table->string('Tag3')->nullable();
            $table->string('Likes')->default(0);
            $table->string('Comments')->default(0);
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
