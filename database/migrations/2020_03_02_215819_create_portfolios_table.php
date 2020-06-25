<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('couple_name');
            $table->longText("images");
            $table->longText("movies")->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('category_portfolio_id');
            $table->timestamps();
            $table->foreign("category_portfolio_id")->references('id')->on('category_portfolios')
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
        Schema::dropIfExists('portfolios');
    }
}
