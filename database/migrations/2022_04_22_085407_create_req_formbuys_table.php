<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReqFormbuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('req_formbuys', function (Blueprint $table) {
            $table->id();

            
            
            $table->unsignedBigInteger('UserId')->nullable();//
            $table->unsignedBigInteger('StatusId')->nullable();//
            $table->unsignedBigInteger('BuyFormIdDept')->nullable();//


            $table->string('BuyFormIdNo',20);//
            $table->string('BuyFormDate',20);//
            $table->string('BuyFormDateD',2);//
            $table->string('BuyFormDateM',15);//
            $table->string('BuyFormDateY',4);//
            $table->string('BuyFormDept',100);//


            $table->string('BuyPurpose',200);//
            $table->string('buyBudgetYear',4);//
            $table->string('buyReceive',50);//
            $table->string('BuyBookNoDept',200);//
            $table->string('BuyBookNo',200);//

            $table->string('buyBookDateD',2);//  
            $table->string('buyBookDateM',15);//
            $table->string('buyBookDateY',4);//

            $table->string('buyFormActNo',10);
            $table->string('buyFormActName',200);



            $table->unsignedBigInteger('BudgetId')->nullable();
            $table->bigInteger('BudgetPlanId')->nullable();
            $table->bigInteger('PlanId')->nullable();
            $table->unsignedBigInteger('SubPlanId')->nullable();
            $table->unsignedBigInteger('ProjectId')->nullable();
    


            $table->unsignedBigInteger('HeadmanIId')->nullable(); //<----------------
            $table->string('HeadmanIPosition',100); //<----------------
            $table->unsignedBigInteger('HeadmanIIId')->nullable(); //<----------------
            $table->string('HeadmanIIPosition',100); //<----------------
   




            $table->string('BuyChkI',1)->nullable();
            $table->string('BuyChkIDesc',50)->nullable();
            $table->string('BuyChkII',1)->nullable();
            $table->string('BuyChkIIDesc',50)->nullable();
            $table->string('BuyChkIII',1)->nullable();
            $table->string('BuyChkIIIDesc',50)->nullable();

            $table->string('BuyMatNo',30)->nullable();
            $table->string('BuyMatDate',30)->nullable();

            $table->string('BuyFormPriceSrc',100);
            $table->string('BuyFormUseDate',30);
            $table->string('BuyFormCriteria',50);



            $table->foreign('UserId')->references('id')->on('users');
            $table->foreign('BuyFormIdDept')->references('id')->on('depts');
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
        Schema::dropIfExists('req_formbuys');
    }
}
