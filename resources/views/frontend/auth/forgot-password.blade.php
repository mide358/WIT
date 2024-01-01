<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Women In Tech | Forgot Password Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="WIT" name="description" />
    <meta content="WIT" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">

    <script src="{{ URL::asset('assets/js/layout.js') }}"></script>
    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
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
                                <img src="assets/images/logo-light.png" alt="" height="">
                            </a>
                        </div>
                        <p class="mt-3 fs-15 fw-medium">Women in Tech!</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <p class="text-muted">Forgot Password Page.</p>
                            </div>
                            <div class="p-2 mt-4">
                                @if ($errors->has('error'))
                                    <div class="alert alert-danger">
                                        <p>{{ $errors->first('error') }}</p>
                                        <!-- Additional instructions or suggestions -->
                                    </div>
                                @endif
                                <form action="{{ route('forgot.password.post') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter Email Address" required>
                                        @if($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password-input">Secret Question</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <select name="secret_question" class="form-control" required>
                                                @foreach($questions as $q)
                                                    <option value="{{ $q->name }}">{{ $q->value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Secret Answer</label>
                                        <input type="text" class="form-control @error('secret_answer') is-invalid @enderror" id="email" name="secret_answer" placeholder="Enter Secret Answer" required>
                                        @if($errors->has('secret_answer'))
                                            <span class="text-danger">{{ $errors->first('secret_answer') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Enter your new password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="email" name="password" placeholder="Enter Your new oassword" required>
                                        @if($errors->has('secret_answer'))
                                            <span class="text-danger">{{ $errors->first('secret_answer') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Password Confirmation</label>
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confrim your new password" required>
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">Reset your Password</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="mt-4 text-center">
                        <p>
                            <a href="{{ route('login.get') }}" class="fw-semibold text-primary text-decoration-underline"> Sign in </a>
                        </p>
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
                            <script>document.write(new Date().getFullYear())</script> &nbsp; Prototype Dissertation for Women in Tech by Iyimide Adegunloye
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
</body>

</html>
