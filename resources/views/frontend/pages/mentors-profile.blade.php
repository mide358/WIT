@extends('frontend.layout.master')
@section('title') Women In Tech  @endsection
@section('css')

@endsection

@section('content')
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
            <div class="row mb-3"><h3>1000 mentors founf</h3></div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <div class="card product">
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-sm-auto">
                                        <div class="avatar-lg bg-light rounded p-1" style="height: 16rem; width: 16rem">
                                            <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="col-sm" style="text-align: left">
                                        <h2 class="text-truncate"><a href="ecommerce-product-detail.html" class="text-dark">Moshood Adekunle</a></h2>
                                        <p class="text-muted">
                                            <h3>Role at  <span class="fw-medium">Company</span></h3>
                                        </p>
                                        <p class="text-muted">
                                            <h4>Review</h4>
                                        </p>


                                        <p class="text-muted mb-4 ">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                        </p>


                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="text-lg-end">
                                            <button type="button" class="btn rounded-pill btn-primary waves-effect waves-light" style="visibility: hidden">View Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-footer">
                                <div class="row align-items-center gy-3">
                                    <div class="col-sm">
                                        <div class="d-flex flex-wrap my-n1">
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                    <span class="badge rounded-pill border border-primary text-body">PHP</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                    <span class="badge rounded-pill border border-primary text-body">Java</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                    <span class="badge rounded-pill border border-primary text-body">Product Mangement</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                    <span class="badge rounded-pill border border-primary text-body">Agile</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                    <span class="badge rounded-pill border border-primary text-body">Reporting</span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex align-items-center gap-2 text-muted">
                                            <button type="button" class="btn rounded-pill btn-primary waves-effect waves-light btn-lg">View Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card footer -->
                        </div>
                        <div class="card product">
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-sm-auto">
                                        <div class="avatar-lg bg-light rounded p-1" style="height: 16rem; width: 16rem">
                                            <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="col-sm" style="text-align: left">
                                        <h2 class="text-truncate"><a href="ecommerce-product-detail.html" class="text-dark">Moshood Adekunle</a></h2>
                                        <p class="text-muted">
                                        <h3>Role at  <span class="fw-medium">Company</span></h3>
                                        </p>
                                        <p class="text-muted">
                                        <h4>Review</h4>
                                        </p>


                                        <p class="text-muted mb-4 ">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                        </p>


                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="text-lg-end">
                                            <button type="button" class="btn rounded-pill btn-primary waves-effect waves-light" style="visibility: hidden">View Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-footer">
                                <div class="row align-items-center gy-3">
                                    <div class="col-sm">
                                        <div class="d-flex flex-wrap my-n1">
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                    <span class="badge rounded-pill border border-primary text-body">PHP</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                    <span class="badge rounded-pill border border-primary text-body">Java</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                    <span class="badge rounded-pill border border-primary text-body">Product Mangement</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                    <span class="badge rounded-pill border border-primary text-body">Agile</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                    <span class="badge rounded-pill border border-primary text-body">Reporting</span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex align-items-center gap-2 text-muted">
                                            <button type="button" class="btn rounded-pill btn-primary waves-effect waves-light btn-lg">View Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card footer -->
                        </div>
                        <div class="card product">
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-sm-auto">
                                        <div class="avatar-lg bg-light rounded p-1" style="height: 16rem; width: 16rem">
                                            <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block">
                                        </div>
                                    </div>
                                    <div class="col-sm" style="text-align: left">
                                        <h2 class="text-truncate"><a href="ecommerce-product-detail.html" class="text-dark">Moshood Adekunle</a></h2>
                                        <p class="text-muted">
                                        <h3>Role at  <span class="fw-medium">Company</span></h3>
                                        </p>
                                        <p class="text-muted">
                                        <h4>Review</h4>
                                        </p>


                                        <p class="text-muted mb-4 ">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                        </p>


                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="text-lg-end">
                                            <button type="button" class="btn rounded-pill btn-primary waves-effect waves-light" style="visibility: hidden">View Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-footer">
                                <div class="row align-items-center gy-3">
                                    <div class="col-sm">
                                        <div class="d-flex flex-wrap my-n1">
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                    <span class="badge rounded-pill border border-primary text-body">PHP</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                    <span class="badge rounded-pill border border-primary text-body">Java</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                    <span class="badge rounded-pill border border-primary text-body">Product Mangement</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                    <span class="badge rounded-pill border border-primary text-body">Agile</span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                    <span class="badge rounded-pill border border-primary text-body">Reporting</span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="d-flex align-items-center gap-2 text-muted">
                                            <button type="button" class="btn rounded-pill btn-primary waves-effect waves-light btn-lg">View Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card footer -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')

@endsection
