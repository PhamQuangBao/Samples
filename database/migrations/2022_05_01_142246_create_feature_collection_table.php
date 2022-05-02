<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_collection', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->text('coordinates');
            $table->geometry('test_coordinates');
            $table->timestamps();
        });
        // $table->increments('id');
        //     //job status foreign key 1-n
        //     $table->integer('job_id');
        //     $table->foreign('job_id')->references('id')->on('jobs');
        //     $table->date('request_date')->nullable();
        //     $table->date('submit_date')->nullable();
        //     $table->string('name')->nullable();
        //     $table->string('link')->nullable();
        //     //cv_status foreign key 1-n
        //     $table->integer('cv_status_id')->unsigned()->nullable();
        //     $table->foreign('cv_status_id')->references('id')->on('cv_statuses');
        //     //cv_email tracking foreign key 1-n
        //     $table->integer('cv_email_tracking_id')->unsigned()->nullable();
        //     $table->foreign('cv_email_tracking_id')->references('id')->on('cv_email_tracking');
        //     $table->date('interview_date')->nullable();
        //     //channel (resource) foreign key 1-n
        //     $table->integer('channel_id')->unsigned()->nullable();
        //     $table->foreign('channel_id')->references('id')->on('channels');
        //     $table->double('salary_offer')->nullable();
        //     $table->date('onboard_date')->nullable();
        //     //cv university id 1-n
        //     $table->integer('university_id')->unsigned()->nullable();
        //     $table->foreign('university_id')->references('id')->on('universities');
        //     $table->string('phone_number')->nullable();
        //     $table->string('mail')->nullable();
        //     $table->integer('year_of_experience')->nullable();
        //     $table->text('note')->nullable();
        //     $table->string('file')->nullable();
        //     $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feature_collection');
    }
};
