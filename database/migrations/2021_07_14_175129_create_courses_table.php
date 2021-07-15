<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('type',255);//presence - online
            $table->string('name',255);
            $table->string('price',255);
            $table->string('start',255);
            $table->unsignedBigInteger('coach_id');
            $table->foreign('coach_id')->references('id')->on('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /** $table->timestamps();
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
