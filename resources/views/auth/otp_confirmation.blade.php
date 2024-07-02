<!doctype html>
<html lang="en">

    

<head>
        
        <meta charset="utf-8" />
        <title>Medspa | Clinic Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{url('/')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{url('/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{url('/')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

    <div class="auth-bg-basic d-flex align-items-center min-vh-100">
        <div class="bg-overlay bg-light"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 py-5 px-3">
           

                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-transparent shadow-none border-0">

                            <div class="card-body">
                                <div class="py-3">
                                    <div class="text-center">
                                        <div class="pb-3">
                                            <a href="index.html">
                                                <span class="logo-lg">
                                                    
                                                    <img src="{{url('/images/forever-color.fw_.png')}}" alt="" height="120"> 
                                                </span>
                                            </a>
                                            
                                        </div>
                                        <div class="text-center">
                                            <h5 class="mb-0">Forgot Password</h5>
                                         
                                        </div>
                                    </div>
                                    </div>
                                    <form class="mt-4 pt-2">
                                        <div class="form-floating form-floating-custom mb-3">
                                            <input type="password" class="form-control" id="input-newpassword" placeholder="Password">
                                            <label for="input-newpassword">New Password</label>
                                            <div class="form-floating-icon">
                                                <i class="uil uil-padlock"></i>
                                            </div>
                                        </div>

                                        <div class="form-floating form-floating-custom mb-3">
                                            <input type="password" class="form-control" id="input-confirmpassword" placeholder="Password">
                                            <label for="input-confirmpassword">Confirm Password</label>
                                            <div class="form-floating-icon">
                                                <i class="uil uil-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit1-input" class="visually-hidden">Dight 1</label>
                                                    <input type="text" class="form-control form-control-lg text-center" onkeyup="moveToNext(this, 2)" maxlength="1" id="digit1-input">
                                                </div>
                                            </div><!-- end col -->
    
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit2-input" class="visually-hidden">Dight 2</label>
                                                    <input type="text" class="form-control form-control-lg text-center" onkeyup="moveToNext(this, 3)" maxlength="1" id="digit2-input">
                                                </div>
                                            </div><!-- end col -->
    
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit3-input" class="visually-hidden">Dight 3</label>
                                                    <input type="text" class="form-control form-control-lg text-center" onkeyup="moveToNext(this, 4)" maxlength="1" id="digit3-input">
                                                </div>
                                            </div><!-- end col -->
    
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit4-input" class="visually-hidden">Dight 4</label>
                                                    <input type="text" class="form-control form-control-lg text-center" onkeyup="moveToNext(this, 4)" maxlength="1" id="digit4-input">
                                                </div>
                                            </div><!-- end col -->
                                        </div>
    
                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Reset</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <p class="text-muted mb-0">Remember It ?  <a href="auth-signin-basic.html" class="fw-semibold text-decoration-underline"> Sign In </a> </p>
                                        </div>
    
                                    </form><!-- end form -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!-- end row -->
 <!-- end row -->
            </div>
        </div>
        <!-- end container fluid -->
    </div>
    <!-- end authentication section -->

        <!-- JAVASCRIPT -->
        <script src="{{url('/')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('/')}}/assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="{{url('/')}}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{url('/')}}/assets/libs/feather-icons/feather.min.js"></script>
        <!-- two-step-verification js -->
        <script src="{{url('/')}}/assets/js/pages/two-step-verification.init.js"></script>

    </body>


</html>
