<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>-:- ระบบจัดการข้อมูลการจัดซื้อ จัดจ้างพัสดุ SC KKU -:-</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="image/logo/logo_only.png">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="template/assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="template/assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="template/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="template/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="template/assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="template/assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="template/assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="template/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="template/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="template/assets/css/lib/helper.css" rel="stylesheet">
    <link href="template/assets/css/style.css" rel="stylesheet">


    <style>
        .bluetext {
            color: rgb(0, 0, 180);
        }
    </style>

</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="staff">
                            <!-- <img src="assets/images/logo.png" alt="" /> -->
                            <h6 style="margin-bottom: -5px;">เจ้าหน้าที่พัสดุสาขา</h6>
                            <br><span>{{ Auth::user()->fname }}&nbsp;{{ Auth::user()->lname }}</span><br><br>
                            <p>{{ Auth::user()->position }}</p>

                        </a></div>

                    <!--Menu Bar Left-->
                    <li class="label">เมนูหลัก</li>

                    <li><a href="staff"><i class="ti-home"></i>หน้าแรก</a></li>
                    <li><a href="staff-profile"><i class="ti-id-badge"></i>โปรไฟล์</a></li>
                    <li><a href="staff-profile-edit"><i class="ti-settings"></i>แก้ไขข้อมูลหลัก</a></li>

                    <li class="label">สร้างแบบฟอร์ม</li>
                    
                    <li><a class="sidebar-sub-toggle"><i class="ti-write"></i>ยื่นคำร้องแบบฟอร์ม<span
                        class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="form_buy_requests">แบบฟอร์มขอให้จัดซื้อ</a></li>
                            <li><a href="form_hire_requests">แบบฟอร์มขอให้จัดจ้าง</a></li>
                        </ul>
                    </li>

                    <li class="label">รายการสร้างแบบฟอร์ม</li>

                    <li><a href="staff-form-list"><i class="ti-files"></i>รายการคำร้องแบบฟอร์ม</a></li>

                    <li class="label">ตรวจสอบแบบฟอร์ม</li>

                    <li><a href="staff-form-check"><i class="ti-file"></i>ตรวจสอบสถานะคำร้อง</a></li>
                    

                    <li class="label">เครื่องมือ</li>

                    <li><a href="manual"><i class="ti-book"></i>คู่มือการใช้งาน</a></li>

                    <li class="label">----------------------------------</li>


                    <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><i class="ti-close"></i>ออกจากระบบ</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

                    <!--Menu Bar Left-->
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->





    <!--Head Bar-->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                        <img src="image/logo/logo.png" style="width: auto; height: 39px; margin-top: 5px; margin-left: 10px;" alt="logo"/>
                    </div>
                    <div class="float-right">
                        

                        
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">{{ Auth::user()->fname }}&nbsp;{{ Auth::user()->lname }}
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-body">
                                        <ul>

                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();"><i class="ti-power-off"></i><span>ออกจากระบบ</span>
                            
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---->


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h3> แบบฟอร์มขอให้จัดซื้อ </h3>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- insert Here-->

                <div class="row">
                    <div class="col-lg-1"> </div>   

                    <div class="col-lg-10">

                        <form action="{{route('buyFormCreate')}}" method="POST">
                            @csrf
                            <div class="card" style="min-width: 1060px;">   
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 style="text-align: center;"> แบบฟอร์มขอให้จัดซื้อ </h2> 
                                            <input type="text" hidden value="{{ Auth::user()->id}}" id="UserId" name="UserId">
                                            <input type="text" hidden value="1" id="StatusId" name="StatusId">  <!---- T H I S ------->
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row" style="float: left;">
                                                        <h6 style="margin-top: 10px; width: 120px; height: 30px; margin-left: 20px;" class="bluetext">ที่ อว 660301.1. </h6>


                                                        <select id="BuyFormIdDept" name="BuyFormIdDept"  class="input-default form-control" style="width: 60px; height: 40px;">
                                                            
                                                            <option value="{{ Auth::user()->deptCode}}">{{ Auth::user()->deptCode}}</option>

                                                        </select>

                                                        <h6 style="margin-top: 10px;" class="bluetext">&nbsp;&nbsp;./&nbsp;&nbsp;</h6>
                                                        <input class="form-control input-default" style="width: 260px; height: 40px;" placeholder="เลขที่หนังสือ ระบบสร้างให้อัตโนมัติ" type="text" readonly >
                                                </div>
                                                
                                            </div>

                                        </div>


                                        <?php

                                            $month = date('m')*1;
                                            $monththai = array(
                                                "", 
                                                "มกราคม", 
                                                "กุมภาพันธ์", 
                                                "มีนาคม",
                                                "เมษายน",
                                                "พฤษภาคม",
                                                "มิถุนายน",
                                                "กรกฎาคม",
                                                "สิงหาคม",
                                                "กันยายน",
                                                "ตุลาคม",
                                                "พฤศจิกายน",
                                                "ธันวาคม"
                                            );

                                            $day = date('d')*1;
                                            $year = date('Y')+543;


                                            $THDateformat = $day." ".$monththai[$month]." ".$year;

                                        ?>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row" style="float: right;">

                                                    <input type="text" id="BuyFormDate" name="BuyFormDate" value="<?php echo $THDateformat;?>" hidden> <!-- ใช้ได้กับทุกวันที่ -->


                                                    <h6 style="text-align: center; margin-top: 10px; width: 80px; height: 30px;" class="bluetext">วันที่</h6>
                                                    <input style="width: 50px; height: 40px;" class="form-control input-default" type="text" id="BuyFormDateD" name="BuyFormDateD" value="<?php echo $day;?>" readonly>



                                                    <h6 style="text-align: center; margin-top: 10px; width: 80px; height: 30px;" class="bluetext">เดือน</h6>
                                                    <input style="width: 120px; height: 40px;" class="form-control input-default" type="text" id="BuyFormDateM" name="BuyFormDateM" value="<?php echo $monththai[$month];?>" readonly>


                                                    <h6 style="text-align: center; margin-top: 10px; width: 80px; height: 30px;" class="bluetext">พ.ศ.</h6>
                                                    <input style="width: 70px; height: 40px; margin-right: 20px;" class="form-control input-default" type="text" id="BuyFormDateY" name="BuyFormDateY" value="<?php echo $year;?>" readonly>

                                                </div>
                                            </div>
                                           
                                            
                                        </div>


                                    </div>


                                    
                                    <h6 style="margin-left: 20px; margin-bottom: 20px; margin-top: 30px;" class="bluetext">เรื่อง ขอให้จัดซื้อวัสดุ  </h6>
                                    <h6 style="margin-left: 20px; margin-bottom: 20px;" class="bluetext">เรียน คณบดี/รองคณบดี</h6>


                                    <div class="row">

                                        <div class="col-md-12" style="margin-left: 20px;">
                                            <div class="form-group">
                                                <div class="row" style="margin-left: 20px; margin-top: 20px; ">

                                                        <p style="margin: 10px; margin-bottom: 20px; margin-left: 60px;" class="bluetext">1. ด้วย</p>

                                                
                                                        @foreach($user as $row)
                                                            <input style="margin-bottom: 20px; width: 500px; height: 40px;" class="form-control input-default" type="text" value="{{ $row->deptName }}" id="BuyFormDept" name="BuyFormDept" readonly>
                                                        @endforeach
            

                                                        <p style="margin: 10px; margin-bottom: 20px; margin-left: 30px;" class="bluetext">มีความประสงค์ให้ จัดซื้อวัสดุจำนวน&nbsp;&nbsp; <strong><span id="buyFormCount" style="color: green;">1</span></strong>          &nbsp;&nbsp;รายการ</p>

                                                        
                                                        
                                                        <p style="margin: 10px; margin-bottom: 20px;" class="bluetext">(ตามรายละเอียดคุณลักษณะเฉพาะของพัสดุที่แนบ) มีวัตถุประสงค์เพื่อ</p> 
                                                        
                                                        <input style="margin-bottom: 20px;  width: 430px; height: 40px; margin-left: 20px;" class="form-control input-default" type="text" id="BuyPurpose" name="BuyPurpose" required>

                                                </div>
                                        

                                                <div class="row" style="margin-left: 20px; margin-top: 30px;">

                                                    <p style="margin: 10px; margin-bottom: 20px; margin-left: 60px;" class="bluetext">2. แหล่งเงิน</p>

                                                    <select style="margin-bottom: 20px; width: 250px; height: 40px; margin-left: 10px;" class="form-control" id="BudgetId" name="BudgetId"> 
                                                        <option value="1">เงินรายได้</option>
                                                        <option value="2">เงินอุดหนุนจากรัฐ</option>
                                                    </select>
                                                    
                                                    <p style="margin: 10px; margin-bottom: 20px; margin-left: 20px;" class="bluetext">ประจำปีงบประมาณ พ.ศ. </p> 

                                                    <select style="margin-bottom: 20px; width: 250px; height: 40px; margin-left: 10px;" class="form-control" id="buyBudgetYear" name="buyBudgetYear">
                                                        <option value="2565">2565</option>
                                                        <option value="2566">2566</option>
                                                        <option value="2567">2567</option>
                                                        <option value="2568">2568</option>
                                                        <option value="2569">2569</option>
                                                        <option value="2570">2570</option>
                                                        <option value="2571">2571</option>
                                                        <option value="2573">2573</option>
                                                        <option value="2574">2574</option>
                                                    </select>


                                                    

                                                    
                                                </div>

                                                <div class="row" style="margin-left: 20px;">

                                                    <p style="margin: 10px; margin-bottom: 20px; margin-left: 10px;" class="bluetext">แผนงานงบประมาณ</p>
                                                
                                                    <select id="BudgetPlanId" name="BudgetPlanId" style="margin-bottom: 20px; width: 300px; height: 40px; margin-left: 10px;" class="form-control"> 
                                                        @foreach ($planBudgets as $showPlanBudgets)
                                                            <option value="{{$showPlanBudgets->planBudgetCode}}">{{$showPlanBudgets->planBudgetName}}</option>
                                                        @endforeach
                                                    </select>

                                                    <p style="margin: 10px; margin-bottom: 20px; margin-left: 10px;" class="bluetext">แผนงานหลัก</p>


                                                    <select id="PlanId" name="PlanId" style="margin-bottom: 20px; width: 300px; height: 40px; margin-left: 10px;" class="form-control"> 
                                                        @foreach ($plans as $showPlans)
                                                            <option value="{{$showPlans->planCode}}">{{$showPlans->planName}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>


                                                <div class="row" style="margin-left: 20px;">


                                                    <p style="margin: 10px; margin-bottom: 20px;" class="bluetext">แผนงานย่อย</p>

                                                    <select id="SubPlanId" name="SubPlanId" style="margin-bottom: 20px; margin-left: 10px;  width: 350px; height: 40px;" class="form-control input-default"> 
                                                        @foreach ($subPlans as $showSubPlans)
                                                            <option value="{{$showSubPlans->id}}">{{$showSubPlans->subPlanName}}</option>
                                                        @endforeach
                                                    </select>



                                                    <p style="margin: 10px; margin-bottom: 20px; margin-left: 30px;" class="bluetext">ซึ่งได้รับ </p>

                                                    <select id="buyReceive" name="buyReceive" style="margin-bottom: 20px; width: 280px; height: 40px; margin-left: 10px;" class="form-control">
                                                        <option value="อนุมัติจัด">อนุมัติจัด</option>
                                                        <option value="อนุมัติใช้เงิน">อนุมัติใช้เงิน</option>
                                                    </select>

                                                </div>

                                                <div class="row" style="margin-left: 20px; margin-top: 10px">

                                                    <p style="margin: 10px; margin-bottom: 20px;" class="bluetext">ตามหนังสือที่ อว 660301.1.</p>

                                                    <select id="BuyBookNoDept" name="BuyBookNoDept"  class="input-default form-control" style="width: 60px; height: 40px;">
                                                        <option value="{{ Auth::user()->deptCode}}">{{ Auth::user()->deptCode}}</option>
                                                    </select>

                                                    <h6 style="margin-top: 10px;" class="bluetext">&nbsp;&nbsp;./&nbsp;&nbsp;</h6>
                                                    <input class="form-control input-default" style="width: 150px; height: 40px;" placeholder="เลขที่หนังสือ" type="text" id="BuyBookNo" name="BuyBookNo" required>


                                                    <p style="margin: 10px; margin-bottom: 20px;" class="bluetext">ลงวันที่</p>
                                                    <select id="buyBookDateD" name="buyBookDateD"  class="input-default form-control" style="width: 80px; height: 40px;" required>
                                                        <option value="" disabled>วันที่</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>

                                                    </select>


                                                    <p style="margin: 10px; margin-bottom: 20px;" class="bluetext">เดือน</p>
                                                    <select id="buyBookDateM" name="buyBookDateM"  class="input-default form-control" style="width: 120px; height: 40px;" required>
                                                        <option value="" disabled>เดือน</option>
                                                        <option value="มกราคม">มกราคม</option>
                                                        <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                                                        <option value="มีนาคม">มีนาคม</option>
                                                        <option value="เมษายน">เมษายน</option>
                                                        <option value="พฤษภาคม">พฤษภาคม</option>
                                                        <option value="มิถุนายน">มิถุนายน</option>
                                                        <option value="กรกฎาคม">กรกฎาคม</option>
                                                        <option value="สิงหาคม">สิงหาคม</option>
                                                        <option value="กันยายน">กันยายน</option>
                                                        <option value="ตุลาคม">ตุลาคม</option>
                                                        <option value="พฤศจิกายน">พฤศจิกายน</option>
                                                        <option value="ธันวาคม">ธันวาคม</option>
                                                        
                                                    </select>


                                                    <p style="margin: 10px; margin-bottom: 20px;" class="bluetext">พ.ศ.</p>
                                                    <select id="buyBookDateY" name="buyBookDateY"  class="input-default form-control" style="width: 90px; height: 40px;" required>
                                                        <option value="" disabled>พ.ศ.</option>
                                                        <option value="2565">2565</option>
                                                        <option value="2567">2567</option>
                                                        <option value="2568">2568</option>
                                                        <option value="2569">2569</option>
                                                        <option value="2570">2570</option>
                                                        <option value="2571">2571</option>
                                                        <option value="2572">2572</option>
                                                        <option value="2573">2573</option>
                                                        <option value="2574">2574</option>
                                                        <option value="2575">2575</option>
                                                    </select>
                                                    
                                                    

                                                    

                                                </div>
                                                
                                                <div class="row" style="margin-left: 20px; margin-top: 10px">

                                                    <p style="margin: 10px; margin-bottom: 20px;" class="bluetext">โครงการ</p>

                                                    <select id="ProjectId" name="ProjectId" style="margin-bottom: 20px; margin-left: 10px;  width: 500px; height: 40px;" class="form-control input-default"> 
                                                        @foreach ($projects as $showProjects)
                                                            <option value="{{$showProjects->id}}">{{$showProjects->projectName}}</option>
                                                        @endforeach
                                                    </select>

                                                    <p style="margin: 10px; margin-bottom: 20px;" class="bluetext">กิจกรรมลำดับที่ </p>
                                                    <input style="margin-bottom: 20px; width: 80px; height: 40px;" class="form-control input-default" type="text" id="buyFormActNo" name="buyFormActNo" required>

                                                </div>

                                                <div class="row" style="margin-left: 20px; margin-top: 10px">

                                                    <p style="margin: 10px; margin-bottom: 20px;" class="bluetext">ชื่อกิจกรรม </p>
                                                    <input style="margin-bottom: 20px; width: 750px; height: 40px;" class="form-control input-default" type="text" id="buyFormActName" name="buyFormActName" required>

                                                </div>


                                                <div class="row" style="margin-left: 20px; margin-top: 30px;">

                                                    <p style="margin: 10px; margin-bottom: 10px; margin-left: 60px;" class="bluetext">3. เสนอรายชื่อเจ้าหน้าที่เพื่อประกอบการดำเนินการจัดซื้อ ดังนี้</p>

                                                </div>

                                                

                                            </div>

                                        </div>

                                    </div>

<!--เพิ่มตรงนี้-->       
                                    <div class="card">

                                        <div class="card-body" style="margin-top: 30px">

                                            <div class="table-responsive StaffDESCTB">

                                                <h6>รายชื่อเจ้าหน้าที่ผู้จัดทำรายละเอียดคุณลักษณะเฉพาะของพัสดุ</h6> <br>

                                                <table class="table table-bordered" id="StaffStaffDESCTB">

                                                    <thead>

                                                        <tr>
                                                            <th>รายชื่อ และตำแหน่ง</th>
                                                            <th>ประธาน/กรรมการ</th>
                                                        </tr>
                                                        
                                                    </thead>

                                                    <tbody> 
                                                        <tr>                                    
                                                            <td id="col0">

                                                                <select class="form-control" name="buyListDescUserId[]" required>
                                                                    <option value="">--เลือกรายชื่อ--</option>
                                                                    @foreach ($userData as $showUser)
                                                                        <option value="{{$showUser->id}}">{{$showUser->articleName}}{{$showUser->fname}}&nbsp;{{$showUser->lname}}&nbsp;ตำแหน่ง :&nbsp;{{$showUser->position}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>

                                                            <td id="col1">
                                                                <select class="form-control" name="buyListDescType[]" required>
                                                                    <option value="">--เลือกประเภท--</option>
                                                                    <option value="ประธาน">ประธาน</option>
                                                                    <option value="กรรมการ">กรรมการ</option>
                                                                    <option value=""></option>
                                                                </select>

                                                            </td>

                                                        </tr>
                                                        
                                                    </tbody>

                                                </table>

                                                <input style="margin-top: 20px; float: left;" class="btn btn-info m-b-10 m-l-5" type="button" value="เพิ่มรายชื่อ" onclick="addRows()" />
                                                <input style="margin-top: 20px; float: right;" class="btn btn-danger m-b-10 m-l-5" type="button" value="ลบรายชื่อ" onclick="deleteRows()" />
                                            </div>

                                        </div>
                                    </div>

                                    <script>
                                        function addRows()
                                        { 
                                            var table = document.getElementById('StaffStaffDESCTB');
                                            var rowCount = table.rows.length;
                                            var cellCount = table.rows[0].cells.length; 
                                            var row = table.insertRow(rowCount);
                                
                                            for(var i =0; i <= cellCount; i++)
                                            {
                                                var cell = 'cell'+i;
                                                cell = row.insertCell(i);
                                                var copycel = document.getElementById('col'+i).innerHTML;
                                                cell.innerHTML=copycel;
                                                if(i == 1)
                                                { 
                                                    var radioinput = document.getElementById('col3').getElementsByTagName('input'); 
                                                    for(var j = 0; j <= radioinput.length; j++)
                                                    { 
                                                        if(radioinput[j].type == 'radio')
                                                        { 
                                                            var rownum = rowCount;
                                                            radioinput[j].name = 'gender['+rownum+']';
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                
                                        function deleteRows()
                                        {
                                            var table = document.getElementById('StaffStaffDESCTB');
                                            var rowCount = table.rows.length;
                                            if(rowCount > '2')
                                            {
                                                var row = table.deleteRow(rowCount-1);
                                                rowCount--;
                                            }else{
                                                alert('ควรมีรายชื่ออย่างน้อย 1 รายชื่อ');
                                            }
                                        }
                                    </script>
                            
                                    <div class="card">

                                        <div class="card-body" style="margin-top: 30px">

                                            <div class="table-responsive StaffReceiveTB">
                                                
                                                <h6>รายชื่อเจ้าหน้าที่ผู้ตรวจรับพัสดุ</h6> <br>

                                                <table class="table table-bordered" id="StaffReceiveTable">
                                                    <thead>
                                                        
                                                        <tr>
                                                            <th>รายชื่อ และตำแหน่ง</th>
                                                            <th>ประธาน/กรรมการ</th>
                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr>   
                                                            <td id="colx0">

                                                                <select class="form-control" name="buyListReceiveUserId[]" required>
                                                                    <option value="">--เลือกรายชื่อ--</option>
                                                                    @foreach ($userData as $showUser)
                                                                        <option value="{{$showUser->id}}">{{$showUser->articleName}}{{$showUser->fname}}&nbsp;{{$showUser->lname}}&nbsp;ตำแหน่ง :&nbsp;{{$showUser->position}}</option>
                                                                    @endforeach
                                                                </select>

                                                               
                                                            </td>
                                            
                                                            <td id="colx1">

                                                                <select class="form-control" name="buyListReceiveType[]" required>
                                                                    <option value="">--เลือกประเภท--</option>
                                                                    <option value="ประธาน">ประธาน</option>
                                                                    <option value="กรรมการ">กรรมการ</option>
                                                                    <option value=""></option>
                                                                </select>

                                                            </td>


                                                        </tr>

                                                    </tbody>

                                                </table>

                                                <input style="margin-top: 20px; float: left;" class="btn btn-info m-b-10 m-l-5" type="button" value="เพิ่มรายชื่อ" onclick="addRowx()" />              
                                                <input style="margin-top: 20px; float: right;" class="btn btn-danger m-b-10 m-l-5" type="button" value="ลบรายชื่อ" onclick="deleteRowx()" />
            
                                            </div>

                                        </div>

                                    </div>

                                    <script>
                                            function addRowx()
                                            { 
                                                var table = document.getElementById('StaffReceiveTable');
                                                var rowCount = table.rows.length;
                                                var cellCount = table.rows[0].cells.length; 
                                                var row = table.insertRow(rowCount);
                                    
                                                for(var i =0; i <= cellCount; i++)
                                                {
                                                    var cell = 'cell'+i;
                                                    cell = row.insertCell(i);
                                                    var copycel = document.getElementById('colx'+i).innerHTML;
                                                    cell.innerHTML=copycel;
                                                    if(i == 1)
                                                    { 
                                                        var radioinput = document.getElementById('colx3').getElementsByTagName('input'); 
                                                        for(var j = 0; j <= radioinput.length; j++)
                                                        { 
                                                            if(radioinput[j].type == 'radio')
                                                            { 
                                                                var rownum = rowCount;
                                                                radioinput[j].name = 'gender['+rownum+']';
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                    
                                            function deleteRowx()
                                            {
                                                var table = document.getElementById('StaffReceiveTable');
                                                var rowCount = table.rows.length;
                                                if(rowCount > '2')
                                                {
                                                    var row = table.deleteRow(rowCount-1);
                                                    rowCount--;
                                                }else{
                                                    alert('ควรมีรายชื่ออย่างน้อย 1 รายชื่อ');
                                                }
                                            }
                                    </script>
                                    

                                    <div class="row">

                                        <div class="col-md-12" style="margin-left: 20px;">
                                            <div class="form-group">


                                                <div class="row" style="margin-left: 20px; margin-top: 20px; ">

                                                        <p style="margin: 10px; margin-bottom: 20px; margin-left: 60px;" class="bluetext"> จึงเรียนมาเพื่อโปรดพิจารณา</p>

                                                </div>
            
                                            
                                                <div class="row" style="margin-right: 200px; margin-top: 30px; float: right;">

                                                    <p style="margin: 10px; margin-left: 60px;" class="bluetext">ลงชื่อ ............................................................................................</p>

                                                </div>

                                            </div>
                                        
                                        </div>
                                        

                                        <div class="col-md-12" style="margin-left: 20px;">
                                            <div class="form-group">
                  
                                                    
                                                <div class="row" style="margin-right: 200px; float: right;">
    
                                                    <p style="margin: 10px; margin-bottom: 10px;" class="bluetext">( </p>
    
                                                    <select style="margin-bottom: 20px; width: 250px; height: 40px; text-align: center;" class="form-control" id="HeadmanIId" name="HeadmanIId" required>

                                                        <option value="">-- เลือกผู้บริหาร --</option>

                                                        @foreach ($Headmans as $showHeadmans)
                                                            <option value="{{$showHeadmans->id}}">{{$showHeadmans->headmenArticleName}}{{$showHeadmans->headmenFname}} {{$showHeadmans->headmenLname}}</option>
                                                        @endforeach

                                                    </select>
    
                                                    <p style="margin: 10px; margin-bottom: 10px;" class="bluetext"> )</p>
    
                                                </div>
                                                    
                                            </div>

                                        </div>
                                        

                                        <div class="col-md-12" style="margin-left: 20px;">
                                            <div class="form-group">
                                            
                                                <div class="row" style="margin-right: 200px; float: right;">

                                                    <p style="margin: 10px; margin-bottom: 10px;" class="bluetext">ตำแหน่ง </p>
                                                    
                                                    <input style="margin-bottom: 20px; width: 230px; height: 40px;" class="form-control input-default" type="text" id="HeadmanIPosition" name="HeadmanIPosition" value="หัวหน้าสาขาวิชา/หน่วยงาน">

                                                </div>

                                            </div>
                                        
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-md-12" style="margin-left: 20px;">
                                            <div class="form-group">


                                                <div class="row" style="margin-left: 20px; margin-top: 20px; ">

                                                        <p style="margin: 10px; margin-bottom: 20px; margin-left: 20px;" class="bluetext">
                                                            [ ] อนุมัติแต่งตั้งเจ้าหน้าที่ผู้กำหนดรายละเอียดคุณลักษณะเฉพาะของพัสดุดังกล่าวข้างต้น <br>
                                                            [ ] เห็นชอบรายละเอียดคุณลักษณะเฉพาะของพัสดุตามที่เสนอ และให้กลุ่มภาระงานด้านพัสดุดำเนินการจัดซื้อตามระเบียบที่เกี่ยวข้องต่อไป <br> 
                                                            [ ] ไม่เห็นชอบ / ข้อเสนอแนะอื่น ๆ (ถ้ามี)...................................................................................................................................
                                                        
                                                        </p>

                                                </div>


                                            </div>
                                        
                                        </div>
                                    </div>
                                    


                                    <div class="row">

                                        <div class="col-md-12" style="margin-left: 20px;">
                                            <div class="form-group">

            
                                            
                                                <div class="row" style="margin-right: 200px; margin-top: 30px; float: right;">

                                                    <p style="margin: 10px; margin-left: 60px;" class="bluetext">ลงชื่อ ............................................................................................</p>

                                                </div>

                                            </div>
                                        
                                        </div>
                                        

                                        <div class="col-md-12" style="margin-left: 20px;">
                                            <div class="form-group">
                  
                                                    
                                                <div class="row" style="margin-right: 200px; float: right;">
    
                                                    <p style="margin: 10px; margin-bottom: 10px;" class="bluetext">( </p>
    
                                                    <select style="margin-bottom: 20px; width: 250px; height: 40px; text-align: center;" class="form-control" id="HeadmanIIId" name="HeadmanIIId" required>
                                                        <option value="">-- เลือกผู้บริหาร --</option>
                                                        @foreach ($Headmans as $showHeadmans)
                                                            <option value="{{$showHeadmans->id}}">{{$showHeadmans->headmenArticleName}}{{$showHeadmans->headmenFname}} {{$showHeadmans->headmenLname}}</option>
                                                        @endforeach
                                                    </select>
    
                                                    <p style="margin: 10px; margin-bottom: 10px;" class="bluetext"> )</p>
    
                                                </div>
                                                    
                                            </div>

                                        </div>

                                        <div class="col-md-12" style="margin-left: 20px;">
                                            <div class="form-group">
                                            
                                                <div class="row" style="margin-right: 150px; float: right;">

                                                    <p style="margin: 10px; margin-bottom: 10px; margin-left: 60px;" class="bluetext">ตำแหน่ง </p>

                                                    <input style="margin-bottom: 20px; width: 550px; height: 40px;" class="form-control input-default" type="text" id="HeadmanIIPosition" name="HeadmanIIPosition" value="คณบดี/รองคณบดีฝ่ายบริหาร ปฏิบัติการแทนอธิการบดีมหาวิทยาลัยขอนแก่น">
                                                    

                                                </div>

                                            </div>
                                        
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" style="margin-left: 20px;">
                                            <div class="form-group">


                                                <div class="row" style="margin-left: 20px; margin-top: 20px; ">

                                                        <p style="margin: 10px; margin-bottom: 20px; margin-left: 60px;" class="bluetext">หมายเหตุ </p>
                                                        <p style="margin: 10px; margin-bottom: 20px; margin-left: 20px;" class="bluetext">
                                                            1) แจ้งความประสงค์ล่วงหน้าก่อนวันที่ต้องการใช้พัสดุ ไม่น้อยกว่า 5 วันทำการ <br>
                                                            2) กรุณากรอกข้อมูลให้ครบถ้วน <br>
                                                            3) กรณียืมเงินให้ระบุชื่อ-นามสกุลผู้ที่ยืมเงินมาด้วย <br>
                                                        </p>

                                                </div>


                                            </div>
                                        
                                        </div>
                                    </div>
<!--จบตรงนี้-->                                 

                                    
                                </div>
                            </div>
   
<!-- END Part 1 --> 

                            <div class="card" style="min-width: 1060px; margin-top: 50px;">   
                                <div class="card-body">
                                    <h2 style="text-align: center; margin-top: 20px; margin-bottom: 20px"> รายละเอียดคุณลักษณะเฉพาะของพัสดุ </h2>

                                    <div class="card">

                                        <div class="card-body" style="margin-top: 30px">

                                            <div class="table-responsive DescListTable">
                                                
                                                <h6 style="margin-bottom: 10px; margin-top: 10px; margin-left: 50px;" class="bluetext">1. รายละเอียดคุณลักษณะเฉพาะของพัสดุ</h6> <br>
    
                                                <table class="table table-bordered" id="DescListTable">
                                                    <thead>
                                                        <tr>
                                                            <th>ชื่อรายการ</th>
                                                            <th>รายละเอียดคุณลักษณะเฉพาะของพัสดุ</th>
                                                            <th>จำนวน/หน่วยนับ</th>
                                                            <th>ราคามาตรฐาน หรือราคากลาง/ต่อหน่วย</th>
                                                            <th>วงเงินจัดซื้อ</th>
                                                        </tr>
                                                    </thead>
    
    
                                                    <tbody>
                                                        <tr>

                                                            <td id="colz0"><input  class="col-md-12 form-control" type="text" name="materialName[]"/></td>
            
                                                            <td id="colz1"><input  class="col-md-12 form-control" type="text" name="materialDesc[]"/></td>
                                            
                                                            <td id="colz2"><input  class="col-md-12 form-control" type="number" min="1" name="materialCount[]"/></td>
                                            
                                            
                                                            <td id="colz3"><input  class="col-md-12 form-control" type="text" name="materialPrice[]"/></td>
                                            
                                                            <td id="colz4"><input  class="col-md-12 form-control" type="text" name="materialBudget[]"/></td>
    
                                                        </tr>
    
                                                    </tbody>
    
                                                </table>
    
    
                                                <input style="margin-top: 20px; float: left;" class="btn btn-success m-b-10 m-l-5" type="button" value="เพิ่มรายการ" onclick="addRowZ()" />
                                                <input style="margin-top: 20px; float: right;" class="btn btn-danger m-b-10 m-l-5" type="button" value="ลบรายการ" onclick="deleteRowZ()" />
            
                                            </div>
    
                                        </div>
    
                                    </div>
    
                                    <script>
                                        function addRowZ()
                                        { 
                                            var table = document.getElementById('DescListTable');
                                            var rowCount = table.rows.length;
                                            var cellCount = table.rows[0].cells.length; 
                                            var row = table.insertRow(rowCount);
    
                                            document.getElementById('buyFormCount').innerHTML = rowCount;
                                
                                            for(var i =0; i <= cellCount; i++)
                                            {
                                                var cell = 'cell'+i;
                                                cell = row.insertCell(i);
                                                var copycel = document.getElementById('colz'+i).innerHTML;
                                                cell.innerHTML=copycel;
                                                if(i == 4)
                                                { 
                                                    var radioinput = document.getElementById('colz4').getElementsByTagName('input'); 
                                                    for(var j = 0; j <= radioinput.length; j++)
                                                    { 
                                                        if(radioinput[j].type == 'radio')
                                                        { 
                                                            var rownum = rowCount;
                                                            radioinput[j].name = 'gender['+rownum+']';
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                
                                        function deleteRowZ()
                                        {
                                            var table = document.getElementById('DescListTable');
                                            var rowCount = table.rows.length;
                                            if(rowCount > '2')
                                            {
                                                var row = table.deleteRow(rowCount-1);
                                                rowCount--;
                                            }else{
                                                alert('ควรมีอย่างน้อย 1 รายการ');
                                            }
                                        }
                                    </script><!-- END Part 2.1 --> 


                                    <div class="card">   
                                        <div class="card-body">


                                            <div style="margin-top: 20px"></div>


                                            <div class="row">


                                                <div class="col-md-12" style="margin-left: 20px;">
                                                    
                                                    <div class="form-group">
        
                                                    <!----- เริ่มตัวแปรตรงนี้ ------->
                                                        <div class="row" style="margin-left: 20px; margin-top: 20px; ">
        
                                                                <p style="margin: 10px; margin-bottom: 20px; margin-left: 50px;" class="bluetext">2. เงื่อนไขในใช้พัสดุที่ผลิตภายในประเทศ</p>
        
                                                        </div>
                                                       

                    
                                                        <div class="row" style="margin-left: 30px; margin-top: 20px; ">
                    
                                                            <input style="margin: 10px; margin-bottom: 20px; margin-left: 60px;" type="checkbox" name="BuyChkI" value="/">

                                                            <p style="margin: 8px; margin-left: 10px;" class="bluetext">รายการที่</p>

                                                            <input class="col-md-2 input-default form-control" style="margin-bottom: 10px; margin-left: 10px;" type="text" name="BuyChkIDesc">
                                                            
                                                            <p style="margin: 10px; margin-bottom: 20px; margin-left: 20px;" class="bluetext">
                                                                กำหนดให้ผู้ขายต้องส่งพัสดุที่ผลิตภายในประเทศ
                                                            </p>                
                                                    
                                                        </div>



                                                        <div class="row" style="margin-left: 30px; margin-top: 20px; ">
                    
                                                            <input style="margin: 10px; margin-bottom: 20px; margin-left: 60px;" type="checkbox" name="BuyChkII" value="/">

                                                            <p style="margin: 8px; margin-left: 10px;" class="bluetext">รายการที่</p>

                                                            <input class="col-md-2 input-default form-control" style="margin-bottom: 10px; margin-left: 10px;" type="text" name="BuyChkIIDesc">
                                                            
                                                            <p style="margin: 10px; margin-bottom: 20px; margin-left: 20px;" class="bluetext">
                                                                ไม่กำหนดให้ผู้ขายต้องส่งพัสดุที่ผลิตภายในประเทศ เนื่องจากเป็นรายการที่ไม่มีผลิตภายในประเทศ
                                                            </p>                
                                                    
                                                        </div>

                                                        <div class="row" style="margin-left: 30px; margin-top: 20px; ">
                    
                                                            <input style="margin: 10px; margin-bottom: 20px; margin-left: 60px;" type="checkbox" name="BuyChkIII" value="/">

                                                            <p style="margin: 8px; margin-left: 10px;" class="bluetext">รายการที่</p>

                                                            <input class="col-md-2 input-default form-control" style="margin-bottom: 10px; margin-left: 10px;" type="text" name="BuyChkIIIDesc">
                                                            
                                                            <p style="margin: 10px; margin-bottom: 20px; margin-left: 20px;" class="bluetext">
                                                                ไม่กำหนดให้ผู้ขายต้องส่งพัสดุที่ผลิตภายในประเทศ เนื่องจากได้รับอนุมัติฯ ตามหนังสือ

                                                            </p>                
                                                    
                                                        </div>


                                                        <div class="row" style="margin-left: 30px; margin-top: 20px; ">

                                                            <p style="margin: 10px; margin-bottom: 20px; margin-left: 95px;" class="bluetext">เลขที่</p> 
                                                                                                                               
                                                            <input class="col-md-2 input-default form-control" style="margin-bottom: 10px; margin-left: 10px;" type="text" name="BuyMatNo">

                                                            <p style="margin: 10px; margin-bottom: 20px; margin-left: 10px;" class="bluetext">ลงวันที่</p>
                                                        
                                                            <input class="col-md-2 input-default form-control" style="margin-bottom: 10px; margin-left: 10px;" type="text" placeholder="วันที่ / เดือน / พ.ศ." name="BuyMatDate">

                                                        </div><!-- END Part 2.2 --> 

                                                    

                                                        <div class="row" style="margin-left: 20px; margin-top: 20px; ">
        
                                                            <p style="margin: 10px; margin-bottom: 20px; margin-left: 50px;" class="bluetext">3. แหล่งที่มาของราคากลาง</p>

                                                            <input class="input-default form-control" style="margin-bottom: 10px; margin-left: 10px; width: 310px; height: 40px;" type="text" name="BuyFormPriceSrc" required>


    
                                                        </div>


                                                        <div class="row" style="margin-left: 20px; margin-top: 20px; ">
        
                                                            <p style="margin: 10px; margin-bottom: 20px; margin-left: 50px;" class="bluetext">4. โดยต้องการใช้วันที่</p>

                                                            <input class="input-default form-control" style="margin-bottom: 10px; margin-left: 10px; width: 180px; height: 40px;" type="text" name="BuyFormUseDate" placeholder="วันที่ / เดือน / พ.ศ." required>


    
                                                        </div>

                                                        <div class="row" style="margin-left: 20px; margin-top: 20px; ">
        
                                                            <p style="margin: 10px; margin-bottom: 20px; margin-left: 50px;" class="bluetext">5. หลักเกณฑ์ในการพิจารณาคัดเลือกข้อเสนอ</p>

                                                            <input class="input-default form-control" style="margin-bottom: 10px; margin-left: 10px; width: 210px; height: 40px;" type="text" name="BuyFormCriteria" value="เกณฑ์ราคา" required>


    
                                                        </div>

                                                        <!----- จบตัวแปรตรงนี้ ------->

                                                        <div class="row">

                                                            <div class="col-md-12" style="margin-left: 20px;">
                                                                <div class="form-group">
                    
                                
                                                                
                                                                    <div class="row" style="margin-right: 220px; margin-top: 30px; float: right;">
                    
                                                                        <p style="margin: 10px; margin-left: 60px;" class="bluetext">ลงชื่อ ............................................................................................</p>
                    
                                                                    </div>
                    
                                                                </div>
                                                            
                                                            </div>
                                                            
                    
                                                            <div class="col-md-12" style="margin-left: 20px;">
                                                                <div class="form-group">
                                      
                                                                        
                                                                    <div class="row" style="margin-right: 230px; float: right;">
                        
                                                                        <p style="margin: 10px; margin-bottom: 10px;" class="bluetext">( </p>
                        
                                                                        <input style="width: 180px; height: 40px;" class="form-control input-default" type="text" value="{{  Auth::user()->articleName }}{{  Auth::user()->fname }}&nbsp;{{ Auth::user()->lname }}" readonly>
                        
                                                                        <p style="margin: 10px; margin-bottom: 10px;" class="bluetext"> )</p>
                        
                                                                    </div>
                                                                        
                                                                </div>
                    
                                                            </div>
                                                            
                    
                                                            <div class="col-md-12" style="margin-left: 20px;">
                                                                <div class="form-group">
                                                                
                                                                    <div class="row" style="margin-right: 190px; float: right;">
                    
                                                                        <p style="margin: 10px; margin-bottom: 10px;" class="bluetext">เจ้าหน้าที่ผู้จัดทำรายละเอียดคุณลักษณะเฉพาะของพัสดุ</p>
                                                                        
                                                                    </div>
                    
                    
                                                                </div>
                                                            
                                                            </div>
                    
                    
                                                            <div class="col-md-12" style="margin-left: 20px;">
                                                                <div class="form-group">
                                                                
                                                                    <div class="row" style="margin-right: 240px; float: right;">
                    
                                                                        <p style="text-align: center; margin-top: 10px; width: 80px; height: 30px;" class="bluetext">วันที่ </p>
                                                                        <input style="width: 180px; height: 40px;" class="form-control input-default" type="text" id="#" name="#" value="<?php echo $THDateformat;?>" readonly>
                                                                        
                                                                    </div>
                    
                                                                </div>
                                                            
                                                            </div>
                    
                                                        </div>




        
                                                    </div>
                                                
                                                </div>




                                            </div>


                                            <div style="margin-top: 10px"></div>

                                        </div>

                                    </div>

                                    <br><br>



                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="user" style="float: right" class="btn btn-danger btn-rounded m-b-10 m-l-5 col-md-2">ยกเลิก</a>
                                        </div>

                                        <div class="col-md-6">
                                            <button style="float: left" onclick="myFunction()" class="btn btn-success btn-rounded m-b-10 m-l-5 col-md-2" type="submit">ส่งข้อมูล</button>
                                        </div>
                                    </div>

                                    <div style="margin-top: 20px"></div>


                                </div>
                            </div> 

                                
                        </form>

                    </div>       

                    <div class="col-lg-1"></div>  
                    
                </div>
                        

                <!-- insert Here-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer">
                            <p>2021 © คณะวิทยาศาสตร์ มหาวิทยาลัยขอนแก่น.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script>
        function myFunction(){alert("ยืนยันการบันทึกข้อมูล");}
    </script>

   




    <!-- jquery vendor -->
    <script src="template/assets/js/lib/jquery.min.js"></script>
    <script src="template/assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="template/assets/js/lib/menubar/sidebar.js"></script>
    <script src="template/assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="template/assets/js/lib/bootstrap.min.js"></script>
    <script src="template/assets/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="template/assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="template/assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="template/assets/js/lib/calendar-2/pignose.init.js"></script>


    <script src="template/assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="template/assets/js/lib/weather/weather-init.js"></script>
    <script src="template/assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="template/assets/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="template/assets/js/lib/chartist/chartist.min.js"></script>
    <script src="template/assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="template/assets/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="template/assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="template/assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="template/assets/js/dashboard2.js"></script>
</body>

</html>