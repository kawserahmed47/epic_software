<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->Increments('id');
           
            $table->integer('types_id')->unsigned();
            $table->foreign('types_id')->references('id')->on('types')->onDelete('cascade');
            
            $table->string('question_no')->nullable();
            $table->longText('question');
            $table->double('marks')->nullable();
            $table->integer('status')->default("1");
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
        Schema::dropIfExists('questions');
    }
}
