@extends('admin.layouts.master')
@section('title') Dashboard  @endsection
@section('css')
    <style>
        .noRecordFound{
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 300px;
        font-weight: 500;
        font-size: 20px;
        }
    </style>
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
                            <p class="text-muted mb-0">Here's what's happening.</p>
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
            <div class="row">
                <div class="col-xl-2 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Consultations</p>
                                </div>

                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"> </h4>
                                    @if(auth()->user()->full_name)<span>I am a adMIN </span> @endif
                                </div>
                                <div class="avatar-xs flex-shrink-0">
                                    <span class="avatar-title bg-soft-primary rounded fs-4">
                                        <i class="bx bx-chart text-primary"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

            </div> <!-- end row-->

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
