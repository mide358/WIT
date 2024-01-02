@extends('frontend.layout.master')
@section('title') Women In Tech  @endsection
@section('css')
    <style>
        .mail-list a{
            padding: 10px!important;
            border-bottom: 1px solid;
            font-size: 16px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endsection

@section('content')
    <section class="section mt-5" id="candidates" style="">
        <div class="container-fluid" style="padding-right: 5%">

            <div class="email-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                <div class="email-menu-sidebar">
                    <div class="p-4 d-flex flex-column h-100">
                        <div class="pb-4 border-bottom border-bottom-dashed">
                            <a href="{{ route('frontend.mentors.dashboard.index') }}" class="btn btn-danger w-100"> <i class="ri-home-3-fill"></i> Home </a>
                        </div>

                        <div class="mx-n4 px-4 email-menu-sidebar-scroll simplebar-scrollable-y" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px -24px;">
                                <div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div>
                                @include('frontend.pages.mentors.dashboard.sidebar')

                            </div>
                        </div>
                    </div>
                </div>
                <div class="email-content">
                    <div class="row">
                        <h1 class="mb-3 text-center mt-3 flex-grow-1">Edit your Profile</h1>
                    </div>
                    <div class="p-4 pb-0">
                        <form action="{{ route('profile.update') }}" method="POST">
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
                            @csrf
                            <div class="row gy-4">
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="basiInput" class="form-label">First Name</label>
                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ auth()->user()->first_name }}" required>
                                        @if($errors->has('first_name'))
                                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="labelInput" class="form-label">Last Name</label>
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Last Name" value="{{ auth()->user()->last_name }}" required>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Email Address:</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email address" value="{{ auth()->user()->email }}" required>
                                        @if($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Phone Number" value="{{ auth()->user()->phone_number }}" required>
                                        @if($errors->has('phone_number'))
                                            <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">Username</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{ auth()->user()->username }}" required>
                                        @if($errors->has('username'))
                                            <span class="text-danger">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" value="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h6 class="fw-semibold">Skills</h6>
                                    <select class="js-example-basic-multiple form-control" name="interests[]" multiple="multiple" required>
                                        @foreach($interests as $interest)
                                            <option value="{{ $interest->id }}" {{ in_array($interest->id, $userInterests) ? 'selected' : '' }}>{{ $interest->name }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('interests'))
                                        <span class="text-danger">{{ $errors->first('interests') }}</span>
                                    @endif
                                </div>

                                <!--end col-->
                            </div>
                            <div class="row gy-4 mt-4">
                                <div class="col-xxl-12 col-md-12">
                                    <h2 class="text-center">Other Details</h2>
                                </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">Company</label>
                                            <input type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ auth()->user()->profile->company }}" required>
                                            @if($errors->has('company'))
                                                <span class="text-danger">{{ $errors->first('company') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Job Title</label>
                                            <input type="text" class="form-control @error('job_title') is-invalid @enderror" name="job_title" placeholder="Job Title" value="{{ auth()->user()->profile->job_title }}" required>
                                            @if($errors->has('job_title'))
                                                <span class="text-danger">{{ $errors->first('job_title') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Location:</label>
                                            <select class="form-control" name="country_id" required>
                                                @foreach($countries as $country)
                                                    <option value="{{ $country->id }}" {{ ($country->id === auth()->user()->profile->country_id) ? 'selected' : ''}}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('country_id'))
                                                <span class="text-danger">{{ $errors->first('country_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Website</label>
                                            <input type="text" class="form-control @error('website') is-invalid @enderror" name="website" placeholder="Website" value="{{ auth()->user()->website }}" >
                                            @if($errors->has('website'))
                                                <span class="text-danger">{{ $errors->first('website') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-12 col-md-12">
                                        <div>
                                            <label for="valueInput" class="form-label">Bio</label>
                                            <textarea name="bio" class="form-control" rows="5">{{ auth()->user()->profile->bio }}</textarea>
                                            @if($errors->has('bio'))
                                                <span class="text-danger">{{ $errors->first('bio') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="valueInput" class="form-label">LinkedIn</label>
                                            <input type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" placeholder="Linked In" value="{{ auth()->user()->profile->linkedin }}" required>
                                            @if($errors->has('linkedin'))
                                                <span class="text-danger">{{ $errors->first('linkedin') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="valueInput" class="form-label">Twitter</label>
                                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" placeholder="Twitter Handle" value="{{ auth()->user()->profile->twitter }}" required>
                                        @if($errors->has('twitter'))
                                            <span class="text-danger">{{ $errors->first('twitter') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mt-4 mb-4">
                                    <button class="btn btn-success w-100" type="submit">Update Profile</button>
                                </div>

                                    <!--end col-->
                                </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--select2 cdn-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ URL::asset('assets/js/pages/select2.init.js') }}"></script>
@endsection
