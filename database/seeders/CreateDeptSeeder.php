<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Dept;


class CreateDeptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dept = [
            
            [
                'factCode'=>'1',
                'deptName'=>'กองบริหารงานคณะวิทยาศาสตร์', // ID = 1
            ],

            [
                'factCode'=>'1',
                'deptName'=>'สาขาวิชาคณิตศาสตร์',// ID = 2
            ],

            [
                'factCode'=>'1',
                'deptName'=>'สาขาวิชาเคมี',// ID = 3
            ],

            [
                'factCode'=>'1',
                'deptName'=>'สาขาวิชาจุลชีววิทยา',// ID = 4
            ],

            [
                'factCode'=>'1',
                'deptName'=>'สาขาวิชาชีวเคมี',// ID = 5
            ],

            [
                'factCode'=>'1',
                'deptName'=>'สาขาวิชาชีววิทยา',// ID = 6
            ],

            [
                'factCode'=>'1',
                'deptName'=>'สาขาวิทยาศาสตร์สิ่งแวดล้อม',// ID = 7
            ],

            [
                'factCode'=>'1',
                'deptName'=>'สาขาวิชาฟิสิกส์',// ID = 8
            ],

            [
                'factCode'=>'1',
                'deptName'=>'สาขาวิชาวิทยาการคอมพิวเตอร์ (ย้ายคณะ)',// ID = 9 //ไม่ได้ใช้
            ],

            [
                'factCode'=>'1',
                'deptName'=>'สาขาวิชาสถิติ',// ID = 10
            ],

            [
                'factCode'=>'1',
                'deptName'=>'สาขาวิชาวิทยาศาสตร์บูรณาการ',// ID = 11
            ],

        ];

        foreach ($dept as $key => $value) {
            Dept::create($value);
        }

    }
}
