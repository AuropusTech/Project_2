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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="admin">
                            <!-- <img src="assets/images/logo.png" alt="" /> -->

                            <h6 style="margin-bottom: -5px;">เจ้าหน้าที่พัสดุคณะ</h6>
                            <br><span>{{ Auth::user()->fname }}&nbsp;{{ Auth::user()->lname }}</span><br><br>
                            <p>{{ Auth::user()->position }}</p>
                        
                        </a></div>
                            

                    <!--Menu Bar Left-->
                    <li class="label">เมนูหลัก</li>

                    <li><a href="admin"><i class="ti-home"></i>หน้าแรก</a></li>
                    <li><a href="admin-profile"><i class="ti-id-badge"></i>โปรไฟล์</a></li>
                    <li><a href="admin-profile-edit"><i class="ti-settings"></i>แก้ไขข้อมูลหลัก</a></li>
                    <li><a href="admin-information"><i class="ti-world"></i>ประชาสัมพันธ์</a></li>

                    <li class="label">จัดการผู้ใช้</li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-user"></i>สำหรับเจ้าหน้าที่พัสดุ<span
                        class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="admin-all-profile">ข้อมูลหลักเจ้าหน้าที่พัสดุ</a></li>
                            <li><a href="admin-all-profile-edit">แก้ไขข้อมูลเจ้าหน้าที่พัสดุ</a></li>
                            <li><a href="admin-add-new">เพิ่มข้อมูลเจ้าหน้าที่พัสดุ</a></li>
                        </ul>
                    </li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-user"></i>สำหรับบุคลากร<span
                        class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="staff-all-profile">ข้อมูลหลักบุคลากร</a></li>
                            <li><a href="staff-all-profile-edit">แก้ไขข้อมูลบุคลากร</a></li>
                            <li><a href="staff-add-new">เพิ่มข้อมูลบุคลากร</a></li>
                        </ul>
                    </li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-user"></i>สำหรับผู้บริหาร<span
                        class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="executive-all-profile">ข้อมูลหลักผู้บริหาร</a></li>
                            <li><a href="executive-all-profile-edit">แก้ไขข้อมูลผู้บริหาร</a></li>
                            <li><a href="executive-add-new">เพิ่มข้อมูลผู้บริหาร</a></li>
                        </ul>
                    </li>

                    <li class="label">จัดการข้อมูล</li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-panel"></i>เกี่ยวกับคณะและสาขา<span
                        class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="factData">ข้อมูลคณะ</a></li>
                            <li><a href="deptData">ข้อมูลสาขา</a></li>
                        </ul>
                    </li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-panel"></i>เกี่ยวกับข้อมูลต่างๆ<span
                        class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="budgetData">ข้อมูลงบประมาณ</a></li>
                            <li><a href="planBudgetData">ข้อมูลแผนงานงบประมาณ</a></li>
                            <li><a href="planData">ข้อมูลแผนงาน</a></li>
                            <li><a href="subPlanData">ข้อมูลแผนงานย่อย</a></li>
                            <li><a href="projectData">ข้อมูลโครงการ</a></li>
                            <li><a href="statusData">ข้อมูลสถานะเอกสาร (Status)</a></li>
                            <li><a href="positionData">ข้อมูลรายชื่อตำแหน่ง</a></li>
                        </ul>
                    </li>


                    <li class="label">แบบฟอร์ม</li>
                    
                    <li><a href="form-list"><i class="ti-files"></i>รายการคำร้องแบบฟอร์ม</a></li>
                    <li><a href="form-check"><i class="ti-file"></i>ตรวจสอบคำร้อง</a></li>

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

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>สวัสดี, <span>ยินดีต้อนรับ</span> {{ Auth::user()->fname }}&nbsp;{{ Auth::user()->lname }}</h1>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /# row -->

                <!-- ADD HERE -->
                <div class="row" style="margin-bottom: 20px">
                    <div class="col-lg-1"></div>
                    
                    <div class="col-lg-10">

                        <div class="card">
                            <div class="topics">
                                <center><h2 style="margin-bottom: 30px;">ข้อมูลเจ้าหน้าที่พัสดุคณะ</h2></center>                                 
                            </div>

                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="row">

                                        <div class="col-md-4">
                                        </div>

                                        <div class="col-md-8">
                                            <div style="margin-bottom: 20px;">
                                                <h5>ชื่อ - สกุล : &nbsp;&nbsp;&nbsp;&nbsp;{{ Auth::user()->fname }}&nbsp;{{ Auth::user()->lname }}</h5>
                                            </div>
                                            
                                            <div style="margin-bottom: 20px;">
                                                <h5>ตำแหน่ง : &nbsp;&nbsp;&nbsp;&nbsp;{{ Auth::user()->position }}</h5>
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                @foreach($user as $row)
                                                    <h5>สังกัด : &nbsp;&nbsp;&nbsp;&nbsp;{{ $row->deptName }}</h5>
                                                @endforeach
                                            </div>

                                            <div style="margin-bottom: 20px;">
                                                <h5>Email : &nbsp;&nbsp;&nbsp;&nbsp;{{ Auth::user()->email }}</h5>
                                            </div>

                                        </div>

                                    </div>
                                    
                                </div>
                            </div>

                            
                        </div>
                                        
                    </div>
                    
                    <div class="col-lg-1"></div>
                </div>
                <!-- END ADD HERE -->

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