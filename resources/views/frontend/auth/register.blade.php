<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Women In Tech | Register Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="WIT" name="description" />
    <meta content="WIT" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="{{ URL::asset('assets/js/layout.js') }}"></script>
    <!-- Layout config Js -->
    <!-- Bootstrap Css -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ URL::asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ URL::asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ URL::asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />


</head>

<body>

<div class="auth-page-wrapper pt-5">
    <!-- auth page bg -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>

        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
    </div>

    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                            <a href="{{ route('home') }}" class="d-inline-block auth-logo">
                                <img src="assets/images/logo-light.png" alt="" height="20">
                            </a>
                        </div>
                        <p class="mt-3 fs-15 fw-medium">Register an Account.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-8">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p class="text-muted">Sign Up to be a Learner.</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form action="{{ route('register.post') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    @if(session()->has('error'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <label for="username" class="form-label">Profile Picture</label>

                                                <div class="card-body">
                                                    <div class="">
                                                        <div class="fallback">
                                                            <input type="hidden" name="role" value="{{ $role }}">
                                                            <input name="profile_photo" class="form-control @error('profile_photo') is-invalid @enderror" type="file" required>
                                                            @if($errors->has('profile_photo'))
                                                                <span class="text-danger">{{ $errors->first('profile_photo') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end card body -->
                                            </div>
                                            <!-- end card -->
                                        </div> <!-- end col -->
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <label for="firstname" class="form-label">First Name: </label>
                                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" placeholder="Enter first name" value="{{ old('first_name') }}" required>
                                            @if($errors->has('first_name'))
                                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="lastname" class="form-label">Last Name:</label>
                                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="Enter last name" value="{{ old('lastname') }}" required>
                                            @if($errors->has('last_name'))
                                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Enter username" value="{{ old('username') }}" required>
                                        @if($errors->has('username'))
                                            <span class="text-danger">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}" required>
                                        @if($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone_number" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" placeholder="Enter phone number" value="{{ old('phone_number') }}" required>
                                        @if($errors->has('phone_number'))
                                            <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password-input">Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" class="form-control pe-5 password-input @error('password') is-invalid @enderror" name="password" placeholder="Enter password" id="password-input" required>
                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            @if($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <h6 class="fw-semibold">Skills</h6>
                                        <select class="js-example-basic-multiple" name="interests[]" multiple="multiple" required>
                                            @foreach($interests as $interest)
                                                <option value="{{ $interest->id }}">{{ $interest->name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('interests'))
                                            <span class="text-danger">{{ $errors->first('interests') }}</span>
                                        @endif
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">Sign Up</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- end card body -->
                        <div class="mt-4 text-center">
                            <p class="mb-0">ALready have an account ? </p>
                            <p>
                                <a href="{{ route('login.get') }}" class="fw-semibold text-primary text-decoration-underline"> Sign in to your account </a>
                            </p>
                        </div>

                    </div>
                    <!-- end card -->

                    <div class="mt-4 text-center">
                        <p class="mb-0">Already have an account? <a href="{{ route('login.get') }}" class="fw-semibold text-primary text-decoration-underline"> Sign In </a> </p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer start-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0 text-muted">&copy;
                            <script>document.write(new Date().getFullYear())</script> WIT. Crafted with <i class="mdi mdi-heart text-danger"></i> by WIT
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->
<script src="{{ URL::asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ URL::asset('assets/js/plugins.js') }}"></script>
<script src="{{ URL::asset('assets/libs/particles.js/particles.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/particles.app.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/password-addon.init.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--select2 cdn-->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="{{ URL::asset('assets/js/pages/select2.init.js') }}"></script>

<script src="{{ URL::asset('assets/js/app.js') }}"></script>
</body>

</html>
