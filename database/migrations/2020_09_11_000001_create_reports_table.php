<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name')->nullable();
            $table->text('adderss')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('country')->nullable();
            $table->text('geolocation')->nullable();
            $table->string('phone')->nullable();
            $table->string('other_phone')->nullable();
            $table->string('csan_id')->nullable();
            //correction csan ID/ Scan ID 
            $table->string('point_of_contact_name')->nullable();
            $table->string('location_added_by')->nullable();
            $table->string('website')->nullable();
            $table->string('point_of_contact_email')->nullable();
            $table->string('audit_date')->nullable();
            $table->string('audit_stage')->nullable();
            $table->string('assigned_auditor_name')->nullable();
            $table->text('wco')->nullable();
            $table->text('hole_certification')->nullable();
            $table->text('has_the_facility')->nullable();
            $table->text('primary_industry')->nullable();
            $table->string('product_type')->nullable();
            $table->integer('year_established')->nullable();
            $table->integer('grounds_size')->nullable();
            $table->integer('number_of_buildings')->nullable();
            $table->integer('facility_size')->nullable();
            $table->integer('number_of_access')->nullable();
            $table->text('hours_of_operation')->nullable();
            $table->integer('number_of_employees')->nullable();
            $table->integer('number_of_contract_employees')->nullable();
            $table->text('number_of_security_guards')->nullable();
            $table->integer('number_of_migrant_workers')->nullable();
            $table->text('annual_revenue')->nullable();
            $table->string('currency')->nullable();
            $table->text('number_of_shipments_to_usa')->nullable();
            $table->text('port_of_embarkation')->nullable();
            $table->text('port_of_arrival')->nullable();
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
        Schema::dropIfExists('reports');
    }
}
