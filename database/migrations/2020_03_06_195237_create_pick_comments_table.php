<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePickCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pick_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('post_id');
            $table->string('comment_count');
            $table->string('final_file')->nullable();
            $table->enum('status',["addedToDatabase","InProgress","Compelete"])->default("addedToDatabase");
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
        Schema::dropIfExists('pick_comments');
    }
}
