<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('ApplicationFormID')->unique();
            $table->string('FirstName');
            $table->string('DOB');
            $table->string('GuardianName');
            $table->string('MobileNo');
            $table->string('Gender');
            $table->integer('EmploymentStatus');
            $table->integer('PrimaryLanguage');
            

            $table->integer('HighestEducation');

            $table->integer('MaritalStatus');
            $table->integer('ReligionID');
            $table->string('CasteCode');

            $table->integer('UIDType');
            $table->string('UIDNumber');
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
        Schema::dropIfExists('applications');
    }
}
