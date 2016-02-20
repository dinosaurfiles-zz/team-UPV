<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalPersonnelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_personnel', function (Blueprint $table) {
            $table->increments('medical_personnel_id');
            $table->string('medical_personnel_first_name',255);
            $table->string('medical_personnel_last_name',255);
            $table->string('medical_personnel_contact_no',10);
            $table->text('medical_personnel_work_address');
            $table->text('medical_personnel_details');
            $table->index('medical_personnel_id');
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
        Schema::drop('medical_personnel');
    }
}
