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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="pull-left">

                                    <div class="mb-2" style="float: right;">
                                        <a href="{{ route('admin.faqs.create') }}" class="btn btn-danger add-btn">
                                            <i class="ri-error-warning-line align-bottom me-1"></i> Create New FAQs
                                        </a>
                                        &nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example" class="table align-middle no-wrap dt-responsive" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="sort" data-sort="risk_code">#</th>
                                        <th class="sort" data-sort="color_code">Name</th>
                                        <th class="sort" data-sort="color_code">Content</th>
                                        <th class="sort" data-sort="color_code">Type</th>
                                        <th class="sort" data-sort="value">Status</th>
                                        <th class="sort" data-sort="date">Date Added</th>
                                        <th class="sort" data-sort="action">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($faqs as $i => $faq)
                                        <tr>
                                            <td>{{ $i  }}</td>
                                            <td>{{ $faq->name }}</td>
                                            <td>{{ $faq->content }}</td>
                                            <td>{{ $faq->type }}</td>

                                            <td>{{ $faq->status  }}</td>
                                            <td>{{ $faq->created_at->toFormattedDateString() }}</td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div class="edit">
                                                        <a href="#" class="btn btn-primary"><i class="ri-edit-line"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div id="pagination-links justify-content-end">
                            {{ $faqs->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                    <!--end col-->
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
