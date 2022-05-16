<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Position = [

            [
                'positionType'=>'เจ้าหน้าที่พัสดุปฏิบัติการ',
            ],

            [
                'positionType'=>'หัวหน้าสาขาวิชา',
            ],

            [
                'positionType'=>'คณบดีคณะวิทยาศาสตร์',
            ],

            [
                'positionType'=>'ผู้ช่วยศาสตราจารย์',
            ],

            [
                'positionType'=>'รองศาสตราจารย์',
            ],

            [
                'positionType'=>'ศาสตราจารย์',
            ],
            [
                'positionType'=>'หัวหน้าสาขาวิชาคณิตศาสตร์',
            ],
            [
                'positionType'=>'หัวหน้าสาขาวิชาเคมี',
            ],
            [
                'positionType'=>'หัวหน้าสาขาวิชาจุลชีววิทยา',
            ],
            [
                'positionType'=>'หัวหน้าสาขาวิชาชีวเคมี',
            ],
            [
                'positionType'=>'หัวหน้าสาขาวิชาฟิสิกส์',
            ],
            [
                'positionType'=>'หัวหน้าสาขาวิชาวิทยาศาสตร์สิ่งแวดล้อม',
            ],
            [
                'positionType'=>'หัวหน้าสาขาวิชาสถิติ',
            ],
            [
                'positionType'=>'รักษาการแทนหัวหน้าสาขาวิชาวิทยาศาสตร์บูรณาการ',
            ],
            [
                'positionType'=>'หัวหน้างานงานแผนยุทธศาสตร์และเทคโนโลยีสารสนเทศ',
            ],
            [
                'positionType'=>'นักวิชาการแผนและสารสนเทศชำนาญการ',
            ],
            [
                'positionType'=>'นักวิชาการแผนและสารสนเทศปฏิบัติการ',
            ],
            [
                'positionType'=>'นักวิชาการคอมพิวเตอร์ ชำนาญการ',
            ],
            [
                'positionType'=>'นักวิชาการคอมพิวเตอร์',
            ],
            [
                'positionType'=>'นักสารสนเทศ ชำนาญการ',
            ],
            [
                'positionType'=>'พนักงานวิทยาศาสตร์',
            ],
            [
                'positionType'=>'หัวหน้ากลุ่มภาระงานด้านธุรการและประชาสัมพันธ์',
            ],
            [
                'positionType'=>'นักจัดการงานทั่วไป',
            ],
            [
                'positionType'=>'นักวิชาการโสตทัศนูปกรณ์',
            ],
            [
                'positionType'=>'พนักงานประชาสัมพันธ์',
            ],
            [
                'positionType'=>'หัวหน้ากลุ่มภาระงานด้านทรัพยากรบุคคล',
            ],
            [
                'positionType'=>'นักทรัพยากรบุคคล ระดับปฏิบัติการ',
            ],
            
            [
                'positionType'=>'ช่างเทคนิค ระดับชำนาญงาน',
            ],
            
            [
                'positionType'=>'ช่างเทคนิค',
            ],
            
            [
                'positionType'=>'พนักงานขับรถ',
            ],
            
            [
                'positionType'=>'รักษาการในตำแหน่งหัวหน้างานคลังและพัสดุ',
            ],
            
            [
                'positionType'=>'รักษาการในตำแหน่งหัวหน้าหน่วยการเงินและบัญชี',
            ],
            
            [
                'positionType'=>'นักวิชาการเงินและบัญชี',
            ],
            
            [
                'positionType'=>'นักบัญชี',
            ],
            
            [
                'positionType'=>'รักษาการหัวหน้างานคลังและพัสดุ',
            ],
            
            [
                'positionType'=>'พนักงานพัสดุ ชำนาญงาน',
            ],
            
            [
                'positionType'=>'นักวิชาการพัสดุ ปฏิบัติการ',
            ],
            
            [
                'positionType'=>'นักวิชาการพัสดุ ',
            ],
            
            [
                'positionType'=>'พนักงานธุรการ',
            ],
            
            [
                'positionType'=>'หัวหน้างานบริการการศึกษาและพัฒนานักศึกษา',
            ],
            
            [
                'positionType'=>'หัวหน้ากลุ่มภาระงานด้านบัณฑิตศึกษา',
            ],
            
            [
                'positionType'=>'นักวิชาการศึกษา ชำนาญการ',
            ],
            [
                'positionType'=>'นักวิชาการศึกษา ปฏิบัติการ',
            ],
            
            [
                'positionType'=>'นักวิชาการศึกษา',
            ],
            
            [
                'positionType'=>'รองคณบดีฝ่ายพัฒนานักศึกษาและศิษย์เก่าสัมพันธ์',
            ],
            
            [
                'positionType'=>'หัวหน้ากลุ่มภาระงานด้านพัฒนานักศึกษา',
            ],
            
            [
                'positionType'=>'หัวหน้างานวิจัยและบริการวิชาการ',
            ],
            
            [
                'positionType'=>'นักจัดการงานทั่วไป ชำนาญการ',
            ],
            
            [
                'positionType'=>'นักวิชาการวิทยาศาสตร์ ชำนาญการ',
            ],
            [
                'positionType'=>'นักวิชาการวิทยาศาสตร์ ปฏิบัติการ',
            ],
            

        ];

  
        foreach ($Position as $key => $value) {
            Position::create($value);
        }
    }
}
