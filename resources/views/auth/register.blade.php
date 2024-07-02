<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medspa | Clinic Register</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="{{ url('/') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <link href="{{ url('/') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('/') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="auth-bg-basic d-flex align-items-center min-vh-100">
        <div class="bg-overlay bg-light"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 py-5 px-3">
                <div class="row justify-content-center my-auto">
                    <div class="text-center">
                        <div class="pb-3">
                            <a href="index.html">
                                <span class="logo-lg">
                                    <img src="{{ url('/images/forever-color.fw_.png') }}" alt="" height="120">
                                </span>
                            </a>
                        </div>
                        <h5 class="mb-0">Clinic Registration Account</h5>
                    </div>
                    <form class="mt-4 pt-2" action="{{url('/register')}}"method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" name="first_name" class="form-control" id="input-first" placeholder="Enter First Name">
                                    <label for="input-first">First Name</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-users-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" name="last_name" class="form-control" id="input-last" placeholder="Enter Last Name">
                                    <label for="input-last">Last Name</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-users-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Last Name">
                                    <label for="username">User Name</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-users-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
                                    <label for="email">Email</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-users-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control" id="input-password" placeholder="Enter Password">
                                    <label for="input-password">Password</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-padlock"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" name="profession" class="form-control" id="profession" placeholder="Enter Profession">
                                    <label for="profession">Profession</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-users-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" name="designation" class="form-control" id="designation" placeholder="Enter Designation">
                                    <label for="designation">Designation</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-users-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" name="clinic_name" class="form-control" id="clinic_name">
                                    <label for="clinic_name">Clinic Name</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-users-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" name="clinic_address" class="form-control" id="clinic_address">
                                    <label for="clinic_address">Clinic Address</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-users-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" name="clinic_county" class="form-control" id="clinic_county">
                                    <label for="clinic_county">Country</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-users-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" name="clinic_state" class="form-control" id="clinic_state">
                                    <label for="clinic_state">State</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-users-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-floating">
                                    <input type="text" name="clinic_zipcode" class="form-control" id="clinic_zipcode">
                                    <label for="clinic_zipcode">Zipcode</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-users-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-1">
                            <p class="mb-0">By registering you agree to the Medsap <a href="#" class="text-primary">Terms of Use</a></p>
                        </div>
                        <div class="mt-3 col-md-4">
                            <button class="btn btn-primary w-100" type="submit">Register</button>
                            @if(session('msg')){!!session('msg')!!}@endif
                        </div>
                        <div class="mt-4 pt-3 text-center">
                            <p class="text-muted mb-0">Already have an account? <a href="{{ url('/') }}" class="fw-semibold text-decoration-underline">Login</a></p>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Medsap. Crafted with <i class="mdi mdi-heart text-danger"></i> by Thetemz</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- JAVASCRIPT -->
    <script src="{{ url('/') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="{{ url('/') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ url('/') }}/assets/libs/feather-icons/feather.min.js"></script>
</body>
</html>
