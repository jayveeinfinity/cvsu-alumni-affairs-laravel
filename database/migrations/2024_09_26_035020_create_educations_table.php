<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_profile_id');
            $table->string('level');
            $table->string('institution');
            $table->string('degree');
            $table->year('enrollment_year')->nullable();
            $table->year('graduation_year')->nullable();
            $table->timestamps();

            $table->foreign('user_profile_id')->references('id')->on('user_profiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educations');
    }
}
