<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned(); //unsigned meaning only positive integers
            $table->string('title');
            $table->text('body');
            $table->timestamp('published_at');
            $table->timestamps();

            //use user_id as foreign key referencing users' table's id
            //when user is deleted, it'll also delete all the articles related to the user
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
