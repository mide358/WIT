<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Women In Tech | Login Page</title>
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
                            <a href="index.html" class="d-inline-block auth-logo">
                                <img src="assets/images/logo-light.png" alt="" height="20">
                            </a>
                        </div>
                        <p class="mt-3 fs-15 fw-medium">Register an Account.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="text-center mt-2">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p class="text-muted">Sign Up to be a Learner.</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register.post') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif

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
                                <div class="step-arrow-nav mb-4">

                                    <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link tab active" id="steparrow-gen-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-gen-info" type="button" role="tab" aria-controls="steparrow-gen-info" aria-selected="true">General</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link tab" id="steparrow-description-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-description-info" type="button" role="tab" aria-controls="steparrow-description-info" aria-selected="false">Details</button>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane step fade show active" id="steparrow-gen-info" role="tabpanel" aria-labelledby="steparrow-gen-info-tab">
                                        <div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Upload Profile Photo</label>
                                                <input type="hidden" name="role" value="{{ $role }}">
                                                <input name="profile_photo" class="form-control @error('profile_photo') is-invalid @enderror" type="file" required>
                                                @if($errors->has('profile_photo'))
                                                    <span class="text-danger">{{ $errors->first('profile_photo') }}</span>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="steparrow-gen-info-email-input">First Name</label>
                                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="steparrow-gen-info-firstnameinput" value="{{ old('first_name') }}" placeholder="Enter first name" required >
                                                        @if($errors->has('first_name'))
                                                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="steparrow-gen-info-username-input">Last Name</label>
                                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="steparrow-gen-info-lastname-input" value="{{ old('last_name') }}" placeholder="Enter last name" required >
                                                        @if($errors->has('last_name'))
                                                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="steparrow-gen-info-username-input">Username</label>
                                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="steparrow-gen-info-username-input" name="username" value="{{ old('username') }}" placeholder="Enter username" required >
                                                @if($errors->has('username'))
                                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                                @endif
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="steparrow-gen-info-email-input">Email </label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="steparrow-gen-info-email-input" value="{{ old('email') }}" placeholder="Enter email" required >
                                                @if($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                            <div>
                                                <label class="form-label" for="steparrow-gen-info-phone-input">Phone Number</label>
                                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="steparrow-gen-info-phone-input" value="{{ old('phone_number') }}" placeholder="Enter phone number" required >
                                                @if($errors->has('phone_number'))
                                                    <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                                @endif
                                            </div>
                                            <div class="mt-3">
                                                <label class="form-label" for="steparrow-gen-info-password-input">Password</label>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="steparrow-gen-info-password-input" value="{{ old('password') }}" placeholder="Enter password" required >
                                                @if($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="d-flex align-items-start gap-3 mt-4">
                                            <button type="button" class="btn btn-success btn-label right ms-auto nexttab" data-nexttab="steparrow-description-info-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to moredetails</button>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->

                                    <div class="tab-pane step fade" id="steparrow-description-info" role="tabpanel" aria-labelledby="steparrow-description-info-tab">
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="steparrow-gen-info-email-input">Company</label>
                                                        <input type="text" class="form-control @error('company') is-invalid @enderror" name="company" id="steparrow-gen-info-company-input" placeholder="Enter company name" value="{{ old('company') }}" required >
                                                        @if($errors->has('company'))
                                                            <span class="text-danger">{{ $errors->first('company') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="steparrow-gen-info-username-input">Job TItle</label>
                                                        <input type="text" class="form-control @error('job_title') is-invalid @enderror" name="job_title" id="steparrow-gen-info-jon_title-input" value="{{ old('job_title') }}" placeholder="Enter Job title" required >
                                                        @if($errors->has('job_title'))
                                                            <span class="text-danger">{{ $errors->first('job_title') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="steparrow-gen-info-location-input">Location</label>
                                                        <select name="country_id" id="country_id" class="form-control">
                                                            @foreach($countries as $country)
                                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('country_id'))
                                                            <span class="text-danger">{{ $errors->first('country_id') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="steparrow-gen-info-email-input">Category</label>
                                                        <input type="text" class="form-control @error('category') is-invalid @enderror" name="category" id="steparrow-gen-info-category-input" value="{{ old('category') }}" placeholder="Enter company name" required >
                                                        @if($errors->has('category'))
                                                            <span class="text-danger">{{ $errors->first('category') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="steparrow-gen-info-location-input">Skills</label>
                                                <select class="js-example-basic-multiple form-control" name="interests[]" multiple="multiple" required>
                                                    @foreach($interests as $interest)
                                                        <option value="{{ $interest->id }}">{{ $interest->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('interests'))
                                                    <span class="text-danger">{{ $errors->first('interests') }}</span>
                                                @endif
                                            </div>
                                            <div>
                                                <label class="form-label" for="des-info-description-input">Bio</label>
                                                <textarea class="form-control @error('bio') is-invalid @enderror" value="{{ old('bio') }}" placeholder="Enter Bio" name="bio" id="des-info-bio-input" rows="3" required></textarea>
                                                @if($errors->has('bio'))
                                                    <span class="text-danger">{{ $errors->first('bio') }}</span>
                                                @endif
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="steparrow-gen-info-location-input">LinkedIn</label>
                                                        <input type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" value="{{ old('linkedin') }}" id="steparrow-gen-info-linkedin-input" placeholder="Enter LinkedIn" required >
                                                        @if($errors->has('linkedin'))
                                                            <span class="text-danger">{{ $errors->first('linkedin') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="steparrow-gen-info-twitter-input">Twitter Handle</label>
                                                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ old('twitter') }}" id="steparrow-gen-info-twitter-input" placeholder="Enter twitter handle"  >
                                                        @if($errors->has('twitter'))
                                                            <span class="text-danger">{{ $errors->first('twitter') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start gap-3 mt-4">
                                            <button type="button" class="btn btn-light btn-label prevtab" data-previous="steparrow-gen-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to General</button>
                                            <button type="submit" class="btn btn-success btn-label right ms-auto"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit</button>
                                        </div>
                                    </div>

                                    <!-- end tab pane -->

                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->
                            </form>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                    <div class="mt-4 text-center">
                        <p class="mb-0">Aready have an account ? </p>
                        <p>
                            <a href="{{ route('login.get') }}" class="fw-semibold text-primary text-decoration-underline"> Sign in to your account </a>
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

<script src="{{ URL::asset('assets/libs/dropzone/dropzone-min.js') }}"></script>

<script src="{{ URL::asset('assets/libs/filepond/filepond.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>

<script src="{{ URL::asset('assets/js/pages/form-file-upload.init.js') }}"></script>

<script src="{{ URL::asset('assets/js/app.js') }}"></script>

<script src="{{ URL::asset('assets/js/validate-register.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--select2 cdn-->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>

</html>
