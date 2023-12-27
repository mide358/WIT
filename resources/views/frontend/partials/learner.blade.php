
<section class="section bg-light mt-5" id="candidates">
    <div class="bg-overlay bg-overlay-pattern"></div>
    <div class="row mt-5">&nbsp;</div>
    <div class="container mt-10">
        <div class="row mb-5">
            <div class="card-body border-bottom-dashed border-bottom">
                <form>
                    <div class="row g-3">
                        <div class="col-xl-6">
                            <div class="search-box">
                                <input type="text" class="form-control search" placeholder="Search for skill, user, job title...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xl-4">
                            <div class="row g-3">
                                <div class="col-sm-8">
                                    <div>
                                        <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i class="ri-equalizer-fill me-2 align-bottom"></i>Filters</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </form>
            </div>
        </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        @foreach($learnerData['recommendedMentors'] as $mentor)
                            <div class="card product">
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-sm-auto">
                                        <div class="avatar-lg bg-light rounded p-1" style="height: 16rem; width: 16rem">
                                            <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="col-sm" style="text-align: left">
                                        <h2 class="text-truncate"><a href="ecommerce-product-detail.html" class="text-dark">{{ $mentor->first_name }} {{ $mentor->last_name }}</a></h2>
                                        <p class="text-muted">
                                        <h3>{{ ($mentor->profile) ? $mentor->profile->job_title : 'Product' }} at  <span class="fw-medium">{{ ($mentor->profile) ? $mentor->profile->company : 'Product' }} </span></h3>
                                        </p>
                                        <p class="text-muted">
                                        <h4>Review</h4>
                                        </p>


                                        <p class="text-muted mb-4 ">
                                            {{ ($mentor->bio) ? $mentor->profile->bio : 'Product' }}
                                        </p>


                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="text-lg-end">
                                            <a href="" class="btn rounded-pill btn-primary waves-effect waves-light" style="visibility: hidden">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-footer">
                                <div class="row align-items-center gy-3">
                                    <div class="col-sm">
                                        <div class="d-flex flex-wrap my-n1">
                                            @foreach($mentor->interests as $interest)
                                                <div>
                                                    <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                        <span class="badge rounded-pill border border-primary text-body">{{ $interest->name }}</span>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex align-items-center gap-2 text-muted">
                                            <a href="{{ route('profile.get', $mentor->slug) }}" type="button" class="btn rounded-pill btn-primary waves-effect waves-light btn-lg">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card footer -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

    </div>
</section>
