<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_budgets', function (Blueprint $table) {

            $table->bigInteger('planBudgetCode',5);
            $table->string('planBudgetName',100);//<--------------------------------------- U S E

            $table->unsignedBigInteger('budgetTypeId');
            
            $table->timestamps();

            $table->foreign('budgetTypeId')->references('id')->on('budget_types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_budgets');
    }
}
