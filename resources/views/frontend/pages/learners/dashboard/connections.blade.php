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
                    <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 mb-3" id="explorecard-list">
                        <h1>My Connections</h1>
                    </div>
                    <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1" id="explorecard-list">
                        @forelse($connections as $connection)
                            <div class="col list-element">
                                <div class="card explore-box card-animate">
                                    <div class="explore-place-bid-img"><input type="hidden" class="form-control" id="1">
                                        <div class="d-none">undefined</div>
                                        <img src="" alt=""
                                             class="card-img-top explore-img">
                                        <div class="bg-overlay"></div>
                                        <div class="place-bid-btn"><a href="{{ route('frontend.mentor.find', ['slug' => $connection->slug]) }}" class="btn btn-success"><i
                                                    class="ri-auction-fill align-bottom me-1"></i> View Profile</a></div>
                                    </div>

                                    <div class="card-body"><p class="fw-medium mb-0 float-end">{{ $connection->profile->location}} </p>                    <h5
                                            class="mb-1"><a href="{{ route('frontend.course.find', ['slug' => $connection->slug]) }}">{{ $connection->name }}</a></h5>
                                        <p class="text-muted mb-0">{{ Str::limit($connection->full_name) }}</p>
                                    </div>
                                    <div class="card-footer border-top border-top-dashed">
                                        <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i>
                                        <span style="color:blue">{{ $connection->profile->job_title}}</span><span class="text-muted"> at </span>
                                        {{ $connection->profile->company }}
                                    </div>
                                    <div class="card-footer border-top border-top-dashed">
                                            @foreach($connection->interests as $interest)
                                                <span class="badge rounded-pill border border-primary text-body">{{ $interest->name }}</span>
                                            @endforeach
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col list-element">
                                <div class="card explore-box card-animate">
                                    <div class="explore-place-bid-img"><input type="hidden" class="form-control" id="1">
                                        <div class="d-none">undefined</div>
                                        <img src="" alt=""
                                             class="card-img-top explore-img">
                                        <div class="bg-overlay"></div>
                                        <div class="place-bid-btn"></div>
                                    </div>

                                    <div class="card-body"><p class="fw-medium mb-0 float-end">
                                            <p>You have not connected with any mentors. Click the button below to explore all mentors</p>
                                        <a href="{{ route('frontend.mentors.index') }}" class="btn btn-lg btn-primary form-control"><i
                                                class="ri-auction-fill align-bottom me-1"></i> Explore Mentors </a>
                                    </div>


                                </div>
                            </div>
                        @endforelse



                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
@endsection
@section('script')

@endsection
