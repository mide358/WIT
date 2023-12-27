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
@endsection

@section('content')
    <section class="section mt-5" id="candidates" style="">
        <div class="container-fluid" style="padding-right: 5%">

        <div class="email-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
            <div class="email-menu-sidebar">
                <div class="p-4 d-flex flex-column h-100">
                    <div class="pb-4 border-bottom border-bottom-dashed">
                        <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#composemodal"> <i class="ri-home-3-fill"></i> Home </button>
                    </div>

                    <div class="mx-n4 px-4 email-menu-sidebar-scroll simplebar-scrollable-y" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px -24px;">
                            <div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div>
                            @include('frontend.pages.learners.dashboard.sidebar')

                        </div>
                    </div>
                </div>
            </div>
            <div class="email-content">
                <div class="p-4 pb-0">
                    <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1" id="explorecard-list">
                        @foreach($connections as $connection)
                            <div class="col list-element">
                                <div class="card explore-box card-animate">
                                    <div class="explore-place-bid-img"><input type="hidden" class="form-control" id="1">
                                        <div class="d-none">undefined</div>
                                        <img src="{{ $course->image }}" alt=""
                                             class="card-img-top explore-img">
                                        <div class="bg-overlay"></div>
                                        <div class="place-bid-btn"><a href="{{ route('frontend.course.find', ['slug' => $course->slug]) }}" class="btn btn-success"><i
                                                    class="ri-auction-fill align-bottom me-1"></i> View Course</a></div>
                                    </div>

                                    <div class="card-body"><p class="fw-medium mb-0 float-end"><i
                                                class="mdi mdi-heart text-danger align-middle"></i> 37.41k </p>                    <h5
                                            class="mb-1"><a href="{{ route('frontend.course.find', ['slug' => $course->slug]) }}">{{ $course->name }}</a></h5>
                                        <p class="text-muted mb-0">{{ Str::limit($course->description, 70) }}</p></div>
                                    <div class="card-footer border-top border-top-dashed">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 fs-14"><i
                                                    class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Duration: <span
                                                    class="fw-medium">{{ $course->duration}}</span></div>
                                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">${{ $course->price }}</h5></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
@endsection
@section('script')

@endsection
