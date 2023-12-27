@extends('frontend.layout.master')
@section('title') Women In Tech  @endsection
@section('css')

@endsection

@section('content')
    <div class="container-fluid" style="padding-right: 5%">

        <div class="row">
            &nbsp;
        </div>
        <div class="row" style="visibility:hidden">
            <div class="col-12">
                <div class="card">
                    &nbsp;
                </div>
            </div>

        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xxl-3">
                <div class="card">
                    <div class="card-body p-4">
                        <div>
                            <div class="row flex-shrink-0 avatar-xxl mx-auto">
                                <div class="avatar-title bg-light rounded">
                                    <img src="{{ $mentor->image }}" alt="" height="200" width="200" />
                                </div>
                            </div>
                            <div class="mt-4 text-center">
                                <h5 class="mb-1">{{ $mentor->profile->job_title }}</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <tbody>
                                    <tr>
                                        <th><span class="fw-medium">Name</span></th>
                                        <td>{{ $mentor->full_name }}</td>
                                    </tr>
                                    <tr>
                                        <th><span class="fw-medium">Email</span></th>
                                        <td>{{ $mentor->email }}</td>
                                    </tr>
                                    <tr>
                                        <th><span class="fw-medium">Website</span></th>
                                        <td><a href="javascript:void(0);" class="link-primary">{{ $mentor->profile->website }}</a></td>
                                    </tr>
                                    <tr>
                                        <th><span class="fw-medium">Contact No.</span></th>
                                        <td>{{ $mentor->phone_number }}</td>
                                    </tr>
                                    <tr>
                                        <th><span class="fw-medium">Location</span></th>
                                        <td>{{ $mentor->profile->location }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Skills</h5>
                            <div class="d-flex flex-wrap gap-2 fs-15">
                                @foreach($mentor->interests as $interest)
                                    <span class="badge rounded-pill border border-primary text-body">{{ $interest->name }}</span>
                                @endforeach
                            </div>
                        </div><!-- end card body -->
                    </div>
                    <!--end card-body-->
                    <div class="card-body border-top border-top-dashed p-4" style="display: none">
                        <div>
                            <h6 class="text-muted text-uppercase fw-semibold mb-4">Learners Reviews</h6>
                            <div>
                                <div>
                                    <div class="bg-light px-3 py-2 rounded-2 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <div class="fs-16 align-middle text-warning">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h6 class="mb-0">4.5 out of 5</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end card-body-->
                    <div class="card-body p-4 border-top border-top-dashed" style="display: none">
                        <h6 class="text-muted text-uppercase fw-semibold mb-4">Products Reviews</h6>
                        <!-- Swiper -->
                        <div class="swiper vertical-swiper" style="height: 246px;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card border border-dashed shadow-none">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-sm">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="assets/images/companies/img-1.png" alt="" height="30">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div>
                                                        <p class="text-muted mb-1 fst-italic">" Great
                                                            product and looks great, lots of features. "</p>
                                                        <div class="fs-11 align-middle text-warning">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="text-end mb-0 text-muted">
                                                        - by <cite title="Source Title">Force
                                                            Medicines</cite>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border border-dashed shadow-none">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-sm rounded">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div>
                                                        <p class="text-muted mb-1 fst-italic">" Amazing
                                                            template, very easy to understand and
                                                            manipulate. "</p>
                                                        <div class="fs-11 align-middle text-warning">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="text-end mb-0 text-muted">
                                                        - by <cite title="Source Title">Henry Baird</cite>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border border-dashed shadow-none">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-sm">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="assets/images/companies/img-8.png" alt="" height="30">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div>
                                                        <p class="text-muted mb-1 fst-italic">"Very
                                                            beautiful product and Very helpful customer
                                                            service."</p>
                                                        <div class="fs-11 align-middle text-warning">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-line"></i>
                                                            <i class="ri-star-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="text-end mb-0 text-muted">
                                                        - by <cite title="Source Title">Zoetic
                                                            Fashion</cite>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border border-dashed shadow-none">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div>
                                                        <p class="text-muted mb-1 fst-italic">" The product
                                                            is very beautiful. I like it. "</p>
                                                        <div class="fs-11 align-middle text-warning">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-fill"></i>
                                                            <i class="ri-star-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="text-end mb-0 text-muted">
                                                        - by <cite title="Source Title">Nancy Martino</cite>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <a href="javascript:void(0)" class="link-primary">View All Reviews <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                        </div>
                    </div style="display: none">
                    <div class="card-body p-4 border-top border-top-dashed" style="display: none">
                        <h6 class="text-muted text-uppercase fw-semibold mb-4" >Contact Support</h6>
                        <form action="#">
                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Enter your messages..."></textarea>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary"><i class="ri-mail-send-line align-bottom me-1"></i> Send
                                    Messages</button>
                            </div>
                        </form>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <div class="col-xxl-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">About</h5>
                        <p>{{ $mentor->profile->bio }}</p>
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <div class="d-flex mt-4">
                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                            <i class="ri-user-2-fill"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="mb-1">Designation :</p>
                                        <h6 class="text-truncate mb-0">{{ $mentor->profile->job_title }} at {{ $mentor->profile->company }}</h6>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-md-4">
                                <div class="d-flex mt-4">
                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                            <i class="ri-global-line"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="mb-1">Website :</p>
                                        <a href="#" class="fw-semibold">{{ $mentor->website }}</a>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-body-->
                </div><!-- end card -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0  me-2">Recent Post</h4>
                            </div>
                            <div class="card-body">
                                <div class="tab-content text-muted">
                                    <div class="tab-pane active" id="today" role="tabpanel">
                                        <div class="profile-timeline">
                                            @forelse($mentor->posts as $post)
                                                <div class="accordion accordion-flush" id="todayExample">
                                                <div class="accordion-item border-0">
                                                    <div class="accordion-header" id="headingOne">
                                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#{{ $post->slug }}{{ $post->id }}" aria-expanded="true">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="{{ $mentor->image }}" alt="" class="avatar-xs rounded-circle">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h6 class="fs-14 mb-1">
                                                                        {{ $mentor->full_name }}
                                                                    </h6>
                                                                    <small class="text-muted">{{ $post->title }}</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div id="{{ $post->slug }}{{ $post->id }}" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body ms-2 ps-5">
                                                            {{ $post->description }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                                Nothing
                                            @endforelse
                                            <!--end accordion-->
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="weekly" role="tabpanel">
                                        <div class="profile-timeline">
                                            <div class="accordion accordion-flush" id="weeklyExample">
                                                <div class="accordion-item border-0">
                                                    <div class="accordion-header" id="heading6">
                                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse6" aria-expanded="true">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h6 class="fs-14 mb-1">
                                                                        Joseph Parker
                                                                    </h6>
                                                                    <small class="text-muted">New people joined with our company - Yesterday</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div id="collapse6" class="accordion-collapse collapse show" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body ms-2 ps-5">
                                                            It makes a statement, it’s
                                                            impressive graphic design.
                                                            Increase or decrease the
                                                            letter spacing depending on
                                                            the situation and try, try
                                                            again until it looks right,
                                                            and each letter has the
                                                            perfect spot of its own.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-0">
                                                    <div class="accordion-header" id="heading7">
                                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse7" aria-expanded="false">
                                                            <div class="d-flex">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-light text-danger">
                                                                        <i class="ri-shopping-bag-line"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h6 class="fs-14 mb-1">
                                                                        Your order is placed <span class="badge bg-success-subtle text-success align-middle">Completed</span>
                                                                    </h6>
                                                                    <small class="text-muted">These customers can rest assured their order has been placed - 1 week Ago</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-0">
                                                    <div class="accordion-header" id="heading8">
                                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse8" aria-expanded="true">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 avatar-xs">
                                                                    <div class="avatar-title bg-light text-success rounded-circle">
                                                                        <i class="ri-home-3-line"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h6 class="fs-14 mb-1">
                                                                        Velzon admin dashboard templates layout upload
                                                                    </h6>
                                                                    <small class="text-muted">We talked about a project on linkedin - 1 week Ago</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div id="collapse8" class="accordion-collapse collapse show" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body ms-2 ps-5 fst-italic">
                                                            Powerful, clean &amp; modern
                                                            responsive bootstrap 5 admin
                                                            template. The maximum file
                                                            size for uploads in this demo :
                                                            <div class="row mt-2">
                                                                <div class="col-xxl-6">
                                                                    <div class="row border border-dashed gx-2 p-2">
                                                                        <div class="col-3">
                                                                            <img src="assets/images/small/img-3.jpg" alt="" class="img-fluid rounded">
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-3">
                                                                            <img src="assets/images/small/img-5.jpg" alt="" class="img-fluid rounded">
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-3">
                                                                            <img src="assets/images/small/img-7.jpg" alt="" class="img-fluid rounded">
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-3">
                                                                            <img src="assets/images/small/img-9.jpg" alt="" class="img-fluid rounded">
                                                                        </div>
                                                                        <!--end col-->
                                                                    </div>
                                                                    <!--end row-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-0">
                                                    <div class="accordion-header" id="heading9">
                                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse9" aria-expanded="false">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h6 class="fs-14 mb-1">
                                                                        New ticket created <span class="badge bg-info-subtle text-info align-middle">Inprogress</span>
                                                                    </h6>
                                                                    <small class="text-muted mb-2">User <span class="text-secondary">Jack365</span> submitted a ticket - 2 week Ago</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-0">
                                                    <div class="accordion-header" id="heading10">
                                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse10" aria-expanded="true">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h6 class="fs-14 mb-1">
                                                                        Jennifer Carter
                                                                    </h6>
                                                                    <small class="text-muted">Commented - 4 week Ago</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div id="collapse10" class="accordion-collapse collapse show" aria-labelledby="heading10" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body ms-2 ps-5">
                                                            <p class="text-muted fst-italic mb-2">
                                                                " This is an awesome
                                                                admin dashboard
                                                                template. It is
                                                                extremely well
                                                                structured and uses
                                                                state of the art
                                                                components (e.g. one of
                                                                the only templates using
                                                                boostrap 5.1.3 so far).
                                                                I integrated it into a
                                                                Rails 6 project. Needs
                                                                manual integration work
                                                                of course but the
                                                                template structure made
                                                                it easy. "</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end accordion-->
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="monthly" role="tabpanel">
                                        <div class="profile-timeline">
                                            <div class="accordion accordion-flush" id="monthlyExample">
                                                <div class="accordion-item border-0">
                                                    <div class="accordion-header" id="heading11">
                                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse11" aria-expanded="false">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 avatar-xs">
                                                                    <div class="avatar-title bg-light text-success rounded-circle">
                                                                        M
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h6 class="fs-14 mb-1">
                                                                        Megan Elmore
                                                                    </h6>
                                                                    <small class="text-muted">Adding a new event with attachments - 1 month Ago.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div id="collapse11" class="accordion-collapse collapse show" aria-labelledby="heading11" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body ms-2 ps-5">
                                                            <div class="row g-2">
                                                                <div class="col-auto">
                                                                    <div class="d-flex border border-dashed p-2 rounded position-relative">
                                                                        <div class="flex-shrink-0">
                                                                            <i class="ri-image-2-line fs-17 text-danger"></i>
                                                                        </div>
                                                                        <div class="flex-grow-1 ms-2">
                                                                            <h6 class="mb-0">
                                                                                <a href="javascript:void(0);" class="stretched-link">Business Template - UI/UX design</a>
                                                                            </h6>
                                                                            <small>685 KB</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="d-flex border border-dashed p-2 rounded position-relative">
                                                                        <div class="flex-shrink-0">
                                                                            <i class="ri-file-zip-line fs-17 text-info"></i>
                                                                        </div>
                                                                        <div class="flex-grow-1 ms-2">
                                                                            <h6 class="mb-0">
                                                                                <a href="javascript:void(0);" class="stretched-link">Bank Management System - PSD</a>
                                                                            </h6>
                                                                            <small>8.78 MB</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="d-flex border border-dashed p-2 rounded position-relative">
                                                                        <div class="flex-shrink-0">
                                                                            <i class="ri-file-zip-line fs-17 text-info"></i>
                                                                        </div>
                                                                        <div class="flex-grow-1 ms-2">
                                                                            <h6 class="mb-0">
                                                                                <a href="javascript:void(0);" class="stretched-link">Bank Management System - PSD</a>
                                                                            </h6>
                                                                            <small>8.78 MB</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-0">
                                                    <div class="accordion-header" id="heading12">
                                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse12" aria-expanded="true">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h6 class="fs-14 mb-1">
                                                                        Jacqueline Steve
                                                                    </h6>
                                                                    <small class="text-muted">We has changed 2 attributes on 3 month Ago</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div id="collapse12" class="accordion-collapse collapse show" aria-labelledby="heading12" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body ms-2 ps-5">
                                                            In an awareness campaign, it
                                                            is vital for people to begin
                                                            put 2 and 2 together and
                                                            begin to recognize your
                                                            cause. Too much or too
                                                            little spacing, as in the
                                                            example below, can make
                                                            things unpleasant for the
                                                            reader. The goal is to make
                                                            your text as comfortable to
                                                            read as possible. A
                                                            wonderful serenity has taken
                                                            possession of my entire
                                                            soul, like these sweet
                                                            mornings of spring which I
                                                            enjoy with my whole heart.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-0">
                                                    <div class="accordion-header" id="heading13">
                                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse13" aria-expanded="false">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h6 class="fs-14 mb-1">
                                                                        New ticket received
                                                                    </h6>
                                                                    <small class="text-muted mb-2">User <span class="text-secondary">Erica245</span> submitted a ticket - 5 month Ago</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-0">
                                                    <div class="accordion-header" id="heading14">
                                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse14" aria-expanded="true">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 avatar-xs">
                                                                    <div class="avatar-title bg-light text-muted rounded-circle">
                                                                        <i class="ri-user-3-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h6 class="fs-14 mb-1">
                                                                        Nancy Martino
                                                                    </h6>
                                                                    <small class="text-muted">Commented on 24 Nov, 2021.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div id="collapse14" class="accordion-collapse collapse show" aria-labelledby="heading14" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body ms-2 ps-5 fst-italic">
                                                            " A wonderful serenity has
                                                            taken possession of my
                                                            entire soul, like these
                                                            sweet mornings of spring
                                                            which I enjoy with my whole
                                                            heart. Each design is a new,
                                                            unique piece of art birthed
                                                            into this world, and while
                                                            you have the opportunity to
                                                            be creative and make your
                                                            own style choices. "
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-0">
                                                    <div class="accordion-header" id="heading15">
                                                        <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse15" aria-expanded="true">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h6 class="fs-14 mb-1">
                                                                        Lewis Arnold
                                                                    </h6>
                                                                    <small class="text-muted">Create new project buildng product - 8 month Ago</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div id="collapse15" class="accordion-collapse collapse show" aria-labelledby="heading15" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body ms-2 ps-5">
                                                            <p class="text-muted mb-2">
                                                                Every team project can
                                                                have a velzon. Use the
                                                                velzon to share
                                                                information with your
                                                                team to understand and
                                                                contribute to your
                                                                project.</p>
                                                            <div class="avatar-group">
                                                                <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="" data-bs-original-title="Christi">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="" data-bs-original-title="Frank Hook">
                                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="" data-bs-original-title=" Ruby">
                                                                    <div class="avatar-xs">
                                                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                                                            R
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="" data-bs-original-title="more">
                                                                    <div class="avatar-xs">
                                                                        <div class="avatar-title rounded-circle">
                                                                            2+
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end accordion-->
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Similar Mentors Profile</h5>
                        <p>&nbsp;</p>
                        <!-- Swiper -->
                        <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1">
                            @forelse($suggestions as $suggestion)
                                <div class="col">
                                    <div class="card">
                                        <img src="{{ $suggestion->image }}" alt="" class="object-fit-cover card-img-top" height="120">
                                        <div class="card-body text-center">
                                            <img src="{{ $suggestion->image }}" alt="" class="avatar-md rounded-circle object-fit-cover mt-n5 img-thumbnail border-light mx-auto d-block">
                                            <a href="{{ route('frontend.mentor.find', ['slug' => $suggestion->slug]) }}">
                                                <h5 class="mt-2 mb-1">{{ $suggestion->full_name }}</h5>
                                            </a>
                                            <p class="text-muted mb-2">{{ $suggestion->profile->job_title }}</p>
                                            <p class="text-muted">{{ Str::limit($suggestion->profile->bio, 50) }}</p>
                                            <a href="{{ route('frontend.mentor.find', ['slug' => $suggestion->slug]) }}" class="btn btn-soft-success w-100">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                No Suggestions Found
                            @endforelse
                            <!--end col-->

                        </div>

                    </div>
                    <!-- end card body -->
                </div><!-- end card -->

            </div>


    </div>
@endsection
@section('script')

@endsection
