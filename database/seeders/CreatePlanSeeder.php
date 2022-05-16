<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Plan;



class CreatePlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $plan = [
            
            [
                'planName'=>'จัดการเรียนการสอนสาขาวิชาชีววิทยา',
                'planBudgetId'=>'62103',
                'planCode'=>'21030100',
                'deptId'=>'6',
            ],
            [
                'planName'=>'จัดการเรียนการสอนสาขาวิชาเคมี',
                'planBudgetId'=>'62103',
                'planCode'=>'21030200',
                'deptId'=>'3',
            ],
            
            [
                'planName'=>'จัดการเรียนการสอนสาขาวิชาคณิตศาสตร์',
                'planBudgetId'=>'62103',
                'planCode'=>'21030300',
                'deptId'=>'2',
            ],
            [
                'planName'=>'จัดการเรียนการสอนสาขาวิชาฟิสิกส์',
                'planBudgetId'=>'62103',
                'planCode'=>'21030400',
                'deptId'=>'8',
            ],
            [
                'planName'=>'จัดการเรียนการสอนสาขาวิชาสถิติ',
                'planBudgetId'=>'62103',
                'planCode'=>'21030500',
                'deptId'=>'10',
            ],
            [
                'planName'=>'จัดการเรียนการสอนสาขาวิชาจุลชีววิทยา',
                'planBudgetId'=>'62103',
                'planCode'=>'21030600',
                'deptId'=>'4',
            ],
            [
                'planName'=>'จัดการเรียนการสอนสาขาวิชานิติวิทยาศาสตร์',
                'planBudgetId'=>'62103',
                'planCode'=>'21031000',
                'deptId'=>'11',
            ],
            [
                'planName'=>'การให้บริการวิชาการ',
                'planBudgetId'=>'62701',
                'planCode'=>'27010000',
                'deptId'=>'1',
            ],
            [
                'planName'=>'ส่งเสริมและทำนุบำรุงศิลปวัฒนธรรม',
                'planBudgetId'=>'62801',
                'planCode'=>'28010000',
                'deptId'=>'1',
            ],
            [
                'planName'=>'งานวิจัยเพื่อสร้างองค์ความรู้',
                'planBudgetId'=>'62902',
                'planCode'=>'29020100',
                'deptId'=>'1',
            ],
            [
                'planName'=>'จัดการเรียนการสอนด้านวิทยาศาสตร์และเทคโนโลยี',
                'planBudgetId'=>'62100',
                'planCode'=>'21000000',//ไม่มีตัวอ้างอิงถึง จาก subPlan
                'deptId'=>'1',
            ],
            [
                'planName'=>'จัดการเรียนการสอนสาขาวิชาชีวเคมี',
                'planBudgetId'=>'62103',
                'planCode'=>'21030800',//ไม่มีตัวอ้างอิงถึง จาก subPlan
                'deptId'=>'5',
            ],
            [
                'planName'=>'จัดการเรียนการสอนสาขาวิชาวิทยาศาสตร์สิ่งแวดล้อม',
                'planBudgetId'=>'62103',
                'planCode'=>'21030900',
                'deptId'=>'7',
            ],
            [
                'planName'=>'จัดการเรียนการสอนสาขาวิชาวิทยาศาสตร์ชีวภาพ',
                'planBudgetId'=>'62103',
                'planCode'=>'21031200',
                'deptId'=>'11',
            ],
            [
                'planName'=>'บริหารการจัดการศึกษาสาขาวิทยาศาสตร์',
                'planBudgetId'=>'62103',
                'planCode'=>'21030001',
                'deptId'=>'1',
            ],

           
        ];



  
        foreach ($plan as $key => $value) {
            Plan::create($value);
        }
        
    }
}