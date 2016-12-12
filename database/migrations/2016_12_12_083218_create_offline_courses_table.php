<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfflineCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offlines', function (Blueprint $table) {
             $table->increments('c_id');

            $table->string('c_name');
            $table->integer('teacher_id')->unsigned()->nullable();
             $table->integer('category_id')->unsigned()->nullable();
             $table->string('disc');

              $table->string('syllabus');
              $table->string('certificates');
                $table->integer('price')->unsigned();
                       $table->string('image');
                       $table->string('branch')->nullable();

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
        Schema::dropIfExists('offlines');
    }
}
