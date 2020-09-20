<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->Increments('id');
            
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('reports')->onDelete('cascade');
            
    
            $table->integer('types_id')->unsigned();
            $table->foreign('types_id')->references('id')->on('types')->onDelete('cascade');
            
            $table->string('status_1')->nullable();
            $table->longText('evidence')->nullable();
            $table->string('status_2')->nullable();
            $table->double('result')->nullable();
            $table->integer('status')->nullable();
            $table->longText('description')->nullable();
            $table->longText('comment')->nullable();
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
        Schema::dropIfExists('assessments');
    }
}
