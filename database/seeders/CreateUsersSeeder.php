<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = [
            [//ไม่ต้องแก้ไข
                'articleName'=>'นาย',
                'fname'=>'สิทธิพงศ์',
                'lname'=>'บับพาน',
                'position'=>'เจ้าหน้าที่พัสดุคณะ',
                'sysRole' =>'เจ้าหน้าที่พัสดุคณะ',//ไม่ต้อง
                'deptCode'=>'1',
                'email'=>'Sittipong_Admin@gmail.com',
                'password'=>Hash::make('AAbb1234'),//ไม่ต้อง

            ],

            [//ไม่ต้องแก้ไข
                'articleName'=>'นาย',
                'fname'=>'กฤษฎา',
                'lname'=>'วารินทร์',
                'position'=>'พนักงานปฏิบัติงานทั่วไป',
                'sysRole' =>'เจ้าหน้าที่พัสดุสาขา',//ไม่ต้อง
                'deptCode'=>'6',
                'email'=>'Kritsada_User@gmail.com',
                'password'=>Hash::make('AAbb1234'),//ไม่ต้อง

            ],

            /*[//ไม่ต้องแก้ไข
                'articleName'=>'นางสาว',
                'fname'=>'ปภัชญา',
                'lname'=>'พิระบัณ',
                'position'=>'พนักงานปฏิบัติงานทั่วไป',
                'sysRole' =>'เจ้าหน้าที่พัสดุสาขา',//ไม่ต้อง
                'deptCode'=>'10',
                'email'=>'One_User@gmail.com',
                'password'=>Hash::make('AAbb1234'),//ไม่ต้อง

            ],*/

            // เริ่มอันนี้เป็นต้นไป
            [
                'articleName'=>'นางสาว',
                'fname'=>'มาริษา',
                'lname'=>'มลอุทก',
                'position'=>'นักวิชาการพัสดุ ปฏิบัติการ',
                'sysRole' =>'เจ้าหน้าที่พัสดุคณะ',//ไม่ต้อง
                'deptCode'=>'1',
                'email'=>'marimo@kku.ac.th',
                'password'=>Hash::make('AAbb1234'),//ไม่ต้อง

            ],

            [
                'articleName'=>'นาง',
                'fname'=>'ละไมย์',
                'lname'=>'แสนเหลา',
                'position'=>'นักวิชาการพัสดุ ชำนาญการ',
                'sysRole' =>'เจ้าหน้าที่พัสดุคณะ',//ไม่ต้อง
                'deptCode'=>'1',
                'email'=>'slamai@kku.ac.th',
                'password'=>Hash::make('AAbb1234'),//ไม่ต้อง
            ],



        ];

  
        foreach ($user as $key => $value) {
            User::create($value);
        }
        
    }
}