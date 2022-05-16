<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_plans', function (Blueprint $table) {
            
            $table->id('id',6);//<--------------------------------------- U S E
            $table->string('subPlanCode',6);
            $table->string('subPlanName',100);//<--------------------------------------- U S E

            $table->bigInteger('planId'); //
            $table->unsignedBigInteger('deptId'); //

            $table->timestamps();

            
            $table->foreign('planId')->references('planCode')->on('plans')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('sub_plans');
    }
}
