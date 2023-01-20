<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_tags')->nullable();
            $table->string('opening_hours')->nullable();
            $table->string('site_logo')->nullable();
            $table->string('address');
            $table->string('address_one')->nullable();
            $table->text('site_description');
            $table->string('email_one');
            $table->string('email_two')->nullable();
            $table->string('contact_number_one');
            $table->string('contact_number_two')->nullable();
            $table->string('contact_number_three')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->text('site_mission')->nullable();
            $table->text('site_vision')->nullable();
            $table->text('site_why_us')->nullable();
            $table->text('site_policy')->nullable();
            $table->string('site_image')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
