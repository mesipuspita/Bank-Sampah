<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from tixia.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jul 2021 10:26:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Halaman Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">

</head>

<body class="h-100" style="background-color: #F5F5DC !important;>
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                
                                    <center>
                                        <!-- <h3 class="text-center mb-4">Welcome To </h3> -->
                                            <img src="{{asset('asset/image/L.png') }}" style="" width="250" height="250" alt="" title="">
                                            @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>    
                                            {{ $message }}
                                        </div>
                                        @endif
                                    </center>
                                    
                                    @if ($message = Session::get('error'))
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>    
                                        {{ $message }}
                                    </div>
                                    @endif
                                    <form action="{{ url('login')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" id="email" class="form-control">
                                            @error('email')
                                                 <div class="text-sm" style="font-size:12px; color:red;">
                                                    {{ $message }}
                                                 </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" id="password" class="form-control">
                                            @error('password')
                                                 <div class="text-sm" style="font-size:12px; color:red;">
                                                    {{ $message }}
                                                 </div>
                                            @enderror
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                        </div>
                                    </form>
                                    
                                        <div class="new-account mt-3">
                                            <p>Don't have an account? Contact me <a class="text-primary" href="{{('register')}}">Sign up</a></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('asset/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('asset/vendor/bootstrap-select/dist/js/bootstrap-select.min.j')}}s"></script>
    <script src="{{asset('asset/js/custom.min.js')}}"></script>
    <script src="j{{asset('asset/deznav-init.js')}}"></script>

</body>


<!-- Mirrored from tixia.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jul 2021 10:26:31 GMT -->
</html>
