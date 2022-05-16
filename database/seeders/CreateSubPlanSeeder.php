<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubPlan;

class CreateSubPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subPlan = [

            //การบริหารจัดการการศึกษาสาขาวิทยาศาสตร์
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การพัฒนานักศึกษา',// ID = 1
                'planId'=>'21030001',//Yes
                'subPlanCode'=>'121270',
                'deptId'=>'1',
            ],
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การผลิตบัณฑิต',// ID = 2
                'planId'=>'21030001',//Yes
                'subPlanCode'=>'121273',
                'deptId'=>'1',
                
            ],[
                'subPlanName'=>'อุดหนุนพัฒนาขีดความสามารถการแข่งขัน',// ID = 3
                'planId'=>'21030001',//Yes
                'subPlanCode'=>'121274',
                'deptId'=>'1',
                
            ],
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์มหาวิทยาลัยสีเขียว',// ID = 4
                'planId'=>'21030001',//Yes
                'subPlanCode'=>'123264',
                'deptId'=>'1',
                
            ],[
                'subPlanName'=>'อุดหนุนยุทธศาสตร์ความเป็นเลิศการบริหารจัดการ',// ID = 5
                'planId'=>'21030001',//Yes
                'subPlanCode'=>'123266',
                'deptId'=>'1',
                
            ],
            [
                'subPlanName'=>'กองทุน 50ปี คณะวิทยาศาสตร์',// ID = 6
                'planId'=>'21030001',//Yes
                'subPlanCode'=>'124425',
                'deptId'=>'1',
                
            ],
            [
                'subPlanName'=>'กองทุนส่งเสริมการผลิตบัณฑิตและพัฒนาวิชาการ',// ID = 7
                'planId'=>'21030001',//yes
                'subPlanCode'=>'125489',
                'deptId'=>'1',
                
            ],
            
            //ชีววิทยา
            [
                'subPlanName'=>'อุดหนุนโครงการพิเศษระดับบัณฑิตศึกษาสาขาวิชาชีววิทยาสำหรับครู',// ID = 8
                'planId'=>'21030100',//Yes
                'subPlanCode'=>'120112',
                'deptId'=>'6',
                
            ],
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การผลิตบัณฑิต',// ID = 9
                'planId'=>'21030100',//Yes
                'subPlanCode'=>'121273',
                'deptId'=>'6',
                
            ],
            [
                'subPlanName'=>'อุดหนุนยุทศาสตร์ความเป็นเลิศการบริหารจัดการ',// ID = 10
                'planId'=>'21030100',//Yes
                'subPlanCode'=>'123266',
                'deptId'=>'6',
                
            ],
            
            [
                'subPlanName'=>'กองทุนส่งเสริมการผลิตบัณฑิตและพัฒนาวิชาการ',// ID = 11
                'planId'=>'21030100',//Yes
                'subPlanCode'=>'125490',
                'deptId'=>'6',
                
            ],
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การพัฒนานักศึกษา',// ID = 12
                'planId'=>'21030100',//Yes
                'subPlanCode'=>'121270',
                'deptId'=>'6',
                
            ],
            //เคมี
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การผลิตบัณฑิต',// ID = 13
                'planId'=>'21030200',//Yes
                'subPlanCode'=>'121273',
                'deptId'=>'3',
                
            ],
            [
                'subPlanName'=>'อุดหนุนยุทศาสตร์ความเป็นเลิศการบริหารจัดการ',// ID = 14
                'planId'=>'21030200',//Yes
                'subPlanCode'=>'123266',
                'deptId'=>'3',
                
            ],
            
            [
                'subPlanName'=>'กองทุนส่งเสริมการผลิตบัณฑิตและพัฒนาวิชาการ',// ID = 15
                'planId'=>'21030200',//Yes
                'subPlanCode'=>'125490',
                'deptId'=>'3',
                
            ],
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การพัฒนานักศึกษา',// ID = 16
                'planId'=>'21030200',//Yes
                'subPlanCode'=>'121270',
                'deptId'=>'3',
                
            ],
            //คณิตศาสตร์
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การผลิตบัณฑิต',// ID = 17
                'planId'=>'21030300',//Yes
                'subPlanCode'=>'121273',
                'deptId'=>'2',
                
            ],
            [
                'subPlanName'=>'อุดหนุนยุทศาสตร์ความเป็นเลิศการบริหารจัดการ',// ID = 18
                'planId'=>'21030300',//Yes
                'subPlanCode'=>'123266',
                'deptId'=>'2',
                
            ],
            
            [
                'subPlanName'=>'กองทุนส่งเสริมการผลิตบัณฑิตและพัฒนาวิชาการ',// ID = 19
                'planId'=>'21030300',//Yes
                'subPlanCode'=>'125490',
                'deptId'=>'2',
                
            ],
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การพัฒนานักศึกษา',// ID = 20
                'planId'=>'21030300',//Yes
                'subPlanCode'=>'121270',
                'deptId'=>'2',
                
            ],
            //ฟิสิกส์
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การผลิตบัณฑิต',// ID = 21
                'planId'=>'21030400',//Yes
                'subPlanCode'=>'121273',
                'deptId'=>'8',
                
            ],
            [
                'subPlanName'=>'อุดหนุนยุทศาสตร์ความเป็นเลิศการบริหารจัดการ',// ID = 22
                'planId'=>'21030400',//Yes
                'subPlanCode'=>'123266',
                'deptId'=>'8',
                
            ],
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การพัฒนานักศึกษา',// ID = 23
                'planId'=>'21030400',//Yes
                'subPlanCode'=>'121270',
                'deptId'=>'8',
                
            ],
            [
                'subPlanName'=>'อุดหนุนกองทุนส่งเสริมการผลิตบัณฑิตและพัฒนาวิชาการ',// ID = 24
                'planId'=>'21030400',//Yes
                'subPlanCode'=>'125490',
                'deptId'=>'8',
                
            ],
            //สถิติ
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การผลิตบัณฑิต',// ID = 25
                'planId'=>'21030500',//Yes
                'subPlanCode'=>'121273',
                'deptId'=>'10',
                
            ],
            [
                'subPlanName'=>'อุดหนุนยุทศาสตร์ความเป็นเลิศการบริหารจัดการ',// ID = 26
                'planId'=>'21030500',//Yes
                'subPlanCode'=>'123266',
                'deptId'=>'10',
                
            ],
            
            [
                'subPlanName'=>'อุดหนุนกองทุนส่งเสริมการผลิตบัณฑิตและพัฒนาวิชาการ',// ID = 27
                'planId'=>'21030500',//Yes
                'subPlanCode'=>'125490',
                'deptId'=>'10',
                
            ],
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การพัฒนานักศึกษา',// ID = 28
                'planId'=>'21030500',//Yes
                'subPlanCode'=>'121270',
                'deptId'=>'10',
                
            ],
            //จุลชีว
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การผลิตบัณฑิต',// ID = 29
                'planId'=>'21030600',//Yes
                'subPlanCode'=>'121273',
                'deptId'=>'4',
                
            ],
            [
                'subPlanName'=>'อุดหนุนยุทศาสตร์ความเป็นเลิศการบริหารจัดการ',// ID = 30
                'planId'=>'21030600',//Yes
                'subPlanCode'=>'123266',
                'deptId'=>'4',
                
            ],
            
            [
                'subPlanName'=>'อุดหนุนกองทุนส่งเสริมการผลิตบัณฑิตและพัฒนาวิชาการ',// ID = 31
                'planId'=>'21030600',//Yes
                'subPlanCode'=>'125490',
                'deptId'=>'4',
                
            ],
        
            //สิ่งแวดล้อม
            
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การผลิตบัณฑิต',// ID = 32
                'planId'=>'21030900',//Yes
                'subPlanCode'=>'121273',
                'deptId'=>'7',
                
            ],
            [
                'subPlanName'=>'อุดหนุนยุทศาสตร์ความเป็นเลิศการบริหารจัดการ',// ID = 33
                'planId'=>'21030900',//Yes
                'subPlanCode'=>'123266',
                'deptId'=>'7',
                
            ],
            
            [
                'subPlanName'=>'อุดหนุนกองทุนส่งเสริมการผลิตบัณฑิตและพัฒนาวิชาการ',// ID = 34
                'planId'=>'21030900',//Yes
                'subPlanCode'=>'125490',
                'deptId'=>'7',
                
            ],
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การพัฒนานักศึกษา',// ID = 35
                'planId'=>'21030900',//Yes
                'subPlanCode'=>'121270',
                'deptId'=>'7',
                
            ],
            //นิติวิทยาศาสตร์
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การผลิตบัณฑิต',// ID = 36
                'planId'=>'21031000',//Yes
                'subPlanCode'=>'121273',
                'deptId'=>'11',
                
            ],
            [
                'subPlanName'=>'อุดหนุนโครงการพิเศษระดับบัณฑิตศึกษา สาขาวิชานิติวิทยาศาสตร์',// ID = 37
                'planId'=>'21031000',//Yes
                'subPlanCode'=>'121325',
                'deptId'=>'11',
                
            ],
            [
                'subPlanName'=>'อุดหนุนกองทุนส่งเสริมการผลิตบัณฑิตและพัฒนาวิชาการ',// ID = 38
                'planId'=>'21031000',//Yes
                'subPlanCode'=>'125490',
                'deptId'=>'11',
                
            ],
            //วิทยาศาสตร์ชีวภาพ
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การผลิตบัณฑิต',// ID = 39
                'planId'=>'21031200',//Yes
                'subPlanCode'=>'121273',
                'deptId'=>'11',
                
            ],
            //การให้บริการวิชาการ
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์เป็นองค์กรที่มีความห่วงใยต่อสังคม',// ID = 40
                'planId'=>'27010000',//Yes
                'subPlanCode'=>'123268',
                'deptId'=>'1',
                
            ],
            //ทำนุบำรุงวัฒนธรรม
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การทำนุบำรุงศิลปวัฒนธรรม',// ID = 41
                'planId'=>'28010000',//Yes
                'subPlanCode'=>'121279',
                'deptId'=>'1',
                
            ],
            //งานวิจัยเพื่อสร้างความรู้
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การวิจัย',// ID = 42
                'planId'=>'29020100',//Yes
                'subPlanCode'=>'121324',
                'deptId'=>'1',
                
            ],
            [
                'subPlanName'=>'กองทุนวิจัย นวัตกรรมและบริการวิชาการ',// ID = 43
                'planId'=>'29020100',//Yes
                'subPlanCode'=>'125491',
                'deptId'=>'1',
                
            ],
            
            //ชีวเคมี
            [
                'subPlanName'=>'อุดหนุนยุทธศาสตร์การผลิตบัณฑิต',// ID = 44
                'planId'=>'21030800',//Yes
                'subPlanCode'=>'121273',
                'deptId'=>'5',
                
            ],
            [
                'subPlanName'=>'อุดหนุนยุทศาสตร์ความเป็นเลิศการบริหารจัดการ',// ID = 45
                'planId'=>'21030800',//Yes
                'subPlanCode'=>'123266',
                'deptId'=>'5',
                
            ],
            
            [
                'subPlanName'=>'อุดหนุนกองทุนส่งเสริมการผลิตบัณฑิตและพัฒนาวิชาการ',// ID = 46
                'planId'=>'21030800',//Yes
                'subPlanCode'=>'125490',
                'deptId'=>'5',
                
            ],

            //บริหารคณะวิทย์
            [
                'subPlanName'=>'อุดหนุนกองทุนส่งเสริมการผลิตบัณฑิตและพัฒนาวิชาการ',// ID = 47
                'planId'=>'21030001',//Yes
                'subPlanCode'=>'125490',
                'deptId'=>'1',
                
            ],
           
            
        ];

  
        foreach ($subPlan as $key => $value) {
            SubPlan::create($value);
        }
    }
}
