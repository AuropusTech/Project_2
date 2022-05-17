<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Headman;

class HeadmanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Headman = [


            [
                'headmenArticleName'=>'นาง',
                'headmenFname'=>'จุฬารักษ์',
                'headmenLname'=>'ขันทะชา',
                'headmenPosition'=>'หัวหน้ากลุ่มภาระงานด้านทรัพยากรบุคคล',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],

            [
                'headmenArticleName'=>'นาง',
                'headmenFname'=>'ปารัชญ์',
                'headmenLname'=>'โคธิเสน',
                'headmenPosition'=>'หัวหน้าลุ่มภาระงานด้านบัณฑิตศึกษา',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],

            [
                'headmenArticleName'=>'นางสาว',
                'headmenFname'=>'ศุภลักษณ์',
                'headmenLname'=>'ทองปัน',
                'headmenPosition'=>'หัวหน้ากลุ่มภาระงานด้านพัฒนานักศึกษา',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],
            
            [
                'headmenArticleName'=>'นาย',
                'headmenFname'=>'ธนากร',
                'headmenLname'=>'โคธิเสน',
                'headmenPosition'=>'หัวหน้ากลุ่มภาระงานด้านธุรการและประชาสัมพันธ์',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],

            [
                'headmenArticleName'=>'นาง',
                'headmenFname'=>'วิรพันธ์',
                'headmenLname'=>'รามจาตุ',
                'headmenPosition'=>'รักษาการหัวหน้างานคลังและพัสดุ',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],

            [
                'headmenArticleName'=>'นาง',
                'headmenFname'=>'กิตติยา',
                'headmenLname'=>'ค้อชากุล',
                'headmenPosition'=>'หัวหน้างานวิจัยและบริการวิชาการ',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],
            [
                'headmenArticleName'=>'ผศ.ดร.',
                'headmenFname'=>'อังคณา',
                'headmenLname'=>'บุญยืด',
                'headmenPosition'=>'คณบดีคณะวิทยาศาสตร์',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],
            [
                'headmenArticleName'=>'ศ.ดร.',
                'headmenFname'=>'ธวัช',
                'headmenLname'=>'ช่างผัส',
                'headmenPosition'=>'หัวหน้าสาขาวิชาคณิตศาสตร์',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],
            [
                'headmenArticleName'=>'รศ.ดร.',
                'headmenFname'=>'สุวัตร',
                'headmenLname'=>'นานันท์',
                'headmenPosition'=>'หัวหน้าสาขาวิชาเคมี',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],
            [
                'headmenArticleName'=>'รศ.ดร.',
                'headmenFname'=>'ธีรศักดิ์',
                'headmenLname'=>'สมดี',
                'headmenPosition'=>'หัวหน้าสาขาวิชาจุลชีววิทยา',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],
            [
                'headmenArticleName'=>'ผศ.ดร.',
                'headmenFname'=>'คมศร',
                'headmenLname'=>'ลมไธสง',
                'headmenPosition'=>'หัวหน้าสาขาวิชาชีวเคมี',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],
            [
                'headmenArticleName'=>'ผศ.ดร.',
                'headmenFname'=>'ปรียา',
                'headmenLname'=>'หวังสมนึก',
                'headmenPosition'=>'หัวหน้าสาขาวิชาชีววิทยา',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],
            [
                'headmenArticleName'=>'รศ.ดร.',
                'headmenFname'=>'ธีรศักดิ์',
                'headmenLname'=>'คำวรรณะ',
                'headmenPosition'=>'หัวหน้าสาขาวิชาฟิสิกส์',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],
            [
                'headmenArticleName'=>'รศ.ดร.',
                'headmenFname'=>'อัจฉราภรณ์',
                'headmenLname'=>'ภักดี',
                'headmenPosition'=>'หัวหน้าสาขาวิชาวิทยาศาสตร์สิ่งแวดล้อม',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],
            [
                'headmenArticleName'=>'รศ.ดร.',
                'headmenFname'=>'วิชุดา',
                'headmenLname'=>'ไชยศิวามงคล',
                'headmenPosition'=>'หัวหน้าสาขาวิชาสถิติ',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],
            [
                'headmenArticleName'=>'ผศ.ดร.',
                'headmenFname'=>'ชูศักดิ์',
                'headmenLname'=>'พูลสวัสดิ์',
                'headmenPosition'=>'รักษาการแทนหัวหน้าสาขาวิชาวิทยาศาสตร์บูรณาการ',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],
            [
                'headmenArticleName'=>'นาง',
                'headmenFname'=>'กิตติยา',
                'headmenLname'=>'ค้อชากุล',
                'headmenPosition'=>'หัวหน้างานวิจัยและบริการวิชาการ',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],
            [
                'headmenArticleName'=>'นาง',
                'headmenFname'=>'จุฬารักษ์',
                'headmenLname'=>'ขันทะชา',
                'headmenPosition'=>'หัวหน้ากลุ่มภาระงานด้านทรัพยากรบุคคล',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],
            [
                'headmenArticleName'=>'นาย',
                'headmenFname'=>'สัมฤทธิ์์',
                'headmenLname'=>'กิจโป้',
                'headmenPosition'=>'ช่างเทคนิค ระดับชำนาญงาน',
                'headmanStatus'=>'ดำรงตำแหน่ง',
            ],
           


        ];

  
        foreach ($Headman as $key => $value) {
            Headman::create($value);
        }
    }
}
