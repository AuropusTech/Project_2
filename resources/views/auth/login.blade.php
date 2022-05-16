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
    <link href="template/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="template/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="template/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="template/assets/css/lib/helper.css" rel="stylesheet">
    <link href="template/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
</head>

<body class="bg-login">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <p><span>ระบบจัดการข้อมูลการจัดซื้อ จัดจ้างพัสดุ</span></p>
                            <h2><span>คณะวิทยาศาสตร์ มหาวิทยาลัยขอนแก่น</span></h2>
                        </div>

                        <div class="login-form">
                            <h4>เข้าสู่ระบบ</h4>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="text-form-bold">Email : อีเมล</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="text-form-bold">Password : รหัสผ่าน</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">เข้าสู่ระบบ</button>
                                </div>
                            </form>

                            <div class="register-link m-t-15 text-center">
                                <p><a href="index">กลับสู่หน้าหลัก</a></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>