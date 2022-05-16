<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id('id',5);//<--------------------------------------- U S E
            $table->string('projectName',200);//<--------------------------------------- U S E
            $table->unsignedBigInteger('subPlanId'); //
            $table->unsignedBigInteger('deptId'); //

            
            $table->timestamps();
            
            $table->foreign('subPlanId')->references('id')->on('sub_plans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('deptId')->references('id')->on('depts');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
