<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Status = [

            [
                'statusName'=>'รอการตรวจสอบ',
            ],

            [
                'statusName'=>'อนุมัติ',
            ],

            [
                'statusName'=>'ไม่อนุมัติ',
            ]

        ];

  
        foreach ($Status as $key => $value) {
            Status::create($value);
        }
    }
}
