<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReqFormhiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('req_formhires', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('UserId')->nullable();//
            $table->unsignedBigInteger('StatusId')->nullable();//
            $table->unsignedBigInteger('HireFormIdDept')->nullable();//


            $table->string('HireFormIdNo',20);//
            $table->string('HireFormDate',20);//
            $table->string('HireFormDateD',2);//
            $table->string('HireFormDateM',15);//
            $table->string('HireFormDateY',4);//
            $table->string('HireFormDept',100);//


            $table->string('HireFormOrder',100);//
            $table->string('HireFormOrderNo',200)->nullable();;//


            $table->string('HirePurpose',200);//
            $table->string('HireBudgetYear',4);//
            $table->string('HireReceive',50);//
            $table->string('HireBookNoDept',200);//
            $table->string('HireBookNo',200);//

            $table->string('HireBookDateD',2);//  
            $table->string('HireBookDateM',15);//
            $table->string('HireBookDateY',4);//

            $table->string('HireFormActNo',10);
            $table->string('HireFormActName',200);


            
            $table->unsignedBigInteger('BudgetId')->nullable();
            $table->bigInteger('BudgetPlanId')->nullable();
            $table->bigInteger('PlanId')->nullable();
            $table->unsignedBigInteger('SubPlanId')->nullable();
            $table->unsignedBigInteger('ProjectId')->nullable();
    


            $table->unsignedBigInteger('HeadmanIId')->nullable(); //<----------------
            $table->string('HeadmanIPosition',100); //<----------------
            $table->unsignedBigInteger('HeadmanIIId')->nullable(); //<----------------
            $table->string('HeadmanIIPosition',100); //<----------------


            $table->string('HireDescFormReason',200);

            $table->string('chkbxI',1)->nullable();
            $table->string('chkbxII',1)->nullable();
            $table->string('chkbxIII',1)->nullable();


            $table->string('chkbxIIIBookNo',30)->nullable();
            $table->string('chkbxIIIDate',30)->nullable();

            $table->string('HireFormPriceSrc',100);
            $table->string('HireFormBudget',100);
            $table->string('HireFormUseDate',30);
            $table->string('HireFormCriteria',50);


            $table->foreign('UserId')->references('id')->on('users');
            $table->foreign('HireFormIdDept')->references('id')->on('depts');
            $table->foreign('StatusId')->references('id')->on('statuses');


            $table->foreign('BudgetId')->references('id')->on('budget_types');
            $table->foreign('BudgetPlanId')->references('planBudgetCode')->on('plan_budgets');
            $table->foreign('PlanId')->references('planCode')->on('plans');
            $table->foreign('SubPlanId')->references('id')->on('sub_plans');
            $table->foreign('ProjectId')->references('id')->on('projects');


            $table->foreign('HeadmanIId')->references('id')->on('headmen');
            $table->foreign('HeadmanIIId')->references('id')->on('headmen');

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
        Schema::dropIfExists('req_formhires');
    }
}
