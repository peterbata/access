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
			$table->increments('id');
			$table->string('title');
			$table->string('fname');
			$table->string('lname');
			$table->string('address');
			$table->string('suite');
			$table->string('city');
			$table->string('province');
			$table->string('postalcode');
			$table->string('country');
			$table->string('gender');
			$table->mediumText('notes');
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
