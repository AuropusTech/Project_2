<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {

            $table->bigInteger('planCode',8);
            $table->string('planName',100);//<--------------------------------------- U S E
            $table->bigInteger('planBudgetId'); 
            $table->unsignedBigInteger('deptId'); //


            $table->timestamps();


            $table->foreign('planBudgetId')->references('planBudgetCode')->on('plan_budgets')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('plans');
    }
}
