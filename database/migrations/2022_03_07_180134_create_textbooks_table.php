<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textbooks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('name', 100);
            $table->string('author_name', 100);
            $table->string('date_time');
            $table->longText('review')->nullable();
            $table->integer('category_id')->unsigned();
            $table->integer('buyer_id')->nullable()->unsigned();
            $table->integer('seller_id')->unsigned();
            $table->integer('reservation_id')->nullable()->unsigned();
            $table->integer('textbook_state_id')->unsigned();
            $table->boolean('is_booked');
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
        Schema::dropIfExists('textbooks');
    }
}
