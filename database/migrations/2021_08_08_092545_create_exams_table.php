<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->integer('level_id');
            $table->string('exam_name')->unique();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamp('start_time')->nullable();
            $table->time('time_period')->nullable();
            $table->string('score_type');
            $table->integer('created_id');
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
        Schema::dropIfExists('exams');
    }
}
