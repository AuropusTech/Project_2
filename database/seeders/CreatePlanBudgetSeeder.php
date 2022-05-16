<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\planBudget;

class CreatePlanBudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $planBudget = [
            
            [
                'planBudgetName'=>'แผนงานผู้สำเร็จการศึกษาคณะวิทยาศาสตร์',
                'budgetTypeId'=>'1',
                'planBudgetCode'=>'62103',
                
            ],
            
            [
                'planBudgetName'=>'แผนงานผลงานการให้บริการวิชาการ',
                'budgetTypeId'=>'1',
                'planBudgetCode'=>'62701',
                
            ],
            [
                'planBudgetName'=>'แผนงานผลงานทำนุบำรุงศิลปะวัฒธรรม',
                'budgetTypeId'=>'1',
                'planBudgetCode'=>'62801',
                
            ],
            [
                'planBudgetName'=>'แผนงานผลงานวิจัยเพื่อสร้างองค์ความรู้',
                'budgetTypeId'=>'1',
                'planBudgetCode'=>'62902',
                
            ],
            [
                'planBudgetName'=>'แผนงานผู้สำเร็จการศึกษาด้านวิทยาศาสตร์และเทคโนโลยี',
                'budgetTypeId'=>'2',
                'planBudgetCode'=>'62100',
                
            ],


            
            
        ];

  
        foreach ($planBudget as $key => $value) {
            planBudget::create($value);
        }


    }
}
