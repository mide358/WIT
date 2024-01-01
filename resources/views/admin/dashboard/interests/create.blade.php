@extends('admin.layouts.master')
@section('title') Create Skills  @endsection
@section('css')

@endsection

@section('content')
    <div class="row">
        <div class="col">

            <div class="h-100">
                <div class="row mb-3 pb-1">
                    <div class="col-12">
                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-16 mb-1">Welcome, {{ \Auth::user()->first_name }}</h4>
                                <p class="text-muted mb-0"></p>
                            </div>
                            <div class="mt-3 mt-lg-0">
                                <form action="javascript:void(0);">
                                    <div class="row g-3 mb-0 align-items-center">

                                        <!--end col-->
                                        <div class="col-auto" style="display: none">
                                            <button type="button" class="btn btn-soft-success"><i class="ri-add-circle-line align-middle me-1"></i> Add Product</button>
                                        </div>
                                        <!--end col-->
                                        <div class="col-auto" style="display: none">
                                            <button type="button" class="btn btn-soft-info btn-icon waves-effect waves-light layout-rightside-btn"><i class="ri-pulse-line"></i></button>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                        </div><!-- end card header -->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row justify-content-center" style="background-color: #FFF">
                    <div class="col-md-10 col-lg-10 col-xl-6">
                        <div class="card mt-4 d-flex flex-row">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Edit Skill</h5>
                                </div>
                                <div class="p-2">
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    <form action="{{ route('admin.skills.update', ['id' => $skill->id]) }}" method="POST">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="name-field" class="form-label">Name: <span class="text-danger">*</span></label>
                                            <div> <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name of Skill..."  value="{{ $skill->name }}" required /></div>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>

                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <div>
                                                <select class="form-control @error('status') is-invalid @enderror" name="status" id="" required>
                                                    <option value="enabled" {{ ($skill->status === 'enabled') ? 'selected' : '' }}>Enabled</option>
                                                    <option value="disabled" {{ ($skill->status === 'disabled') ? 'selected' : '' }}>Disabled</option>
                                                </select>
                                            </div>
                                            @if ($errors->has('status'))
                                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                            @endif
                                        </div>

                                        <div class="mt-4" style="float: right">
                                            <button class="btn btn-success " type="submit" id="add">Update Skill</button>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- end card -->

                    </div>
                </div>

            </div> <!-- end .h-100-->
        </div>
    </div> <!-- end col -->

@endsection
@section('script')
    <!-- Dashboard init -->

    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/apexcharts-bar.init.js') }}"></script>
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js')}}"></script>

    <script src="{{ URL::asset('build/libs/chart.js/chart.min.js') }}"></script>
    <script src="{{ URL::asset('/js/dashboard.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/dashboard-ecommerce.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <!-- dashboard init -->
@endsection
