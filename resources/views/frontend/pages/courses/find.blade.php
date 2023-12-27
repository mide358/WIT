@extends('frontend.layout.master')
@section('title') Women In Tech  @endsection
@section('css')

@endsection

@section('content')
    <div class="container-fluid" style="padding-right: 5%">

        <div class="row">

        </div>
        <div class="row" style="text-align:center; padding: 10px">
            <div class="col-12">
                <div class="card">
                    <h1>{{ $course->name }}</h1>
                </div>
            </div>

        </div>
        <!-- end row -->

        <div class="card">
            <div class="card-body">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="sticky-side-div">
                            <div class="card ribbon-box border shadow-none right">
                                <div class="ribbon-two ribbon-two-danger"><span><i class="ri-fire-fill align-bottom"></i> Hot</span></div>
                                <img src="{{ isset($course->image) ?? '' }}" alt="" class="img-fluid rounded">

                            </div>
                            <div class="hstack gap-2">
                                <button class="btn btn-success w-100">Enroll</button>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-8">
                        <div>
                            <div class="dropdown float-end">
                                <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-fill align-middle fs-16"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                    <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                    <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                </ul>
                            </div>
                            <span class="badge badge-soft-info mb-3 fs-12"><i class="ri-eye-line me-1 align-bottom"></i> 80 learners enrolled</span>
                            <h4>{{ $course->name }}</h4>
                            <div class="hstack gap-3 flex-wrap">
                                <div class="text-muted">Creators :
                                    @forelse($course->mentors as $mentor)
                                        <a href="#" class="text-primary fw-medium">{{ $mentor->full_name }},</a>
                                    @empty
                                        WIT
                                    @endforelse
                                </div>
                                <div class="vr"></div>
                                <div class="text-muted">Published : <span class="text-body fw-medium">{{ ($course->created_at) ?? 'Now' }}</span></div>
                            </div>
                            <div class="d-flex flex-wrap gap-2 align-items-center mt-3">
                                <div class="text-muted fs-16">
                                    <span class="mdi mdi-star text-warning"></span>
                                    <span class="mdi mdi-star text-warning"></span>
                                    <span class="mdi mdi-star text-warning"></span>
                                    <span class="mdi mdi-star text-warning"></span>
                                    <span class="mdi mdi-star text-warning"></span>
                                </div>
                                <div class="text-muted">( 5.50k Customer Review )</div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="p-2 border border-dashed rounded text-center">
                                        <div>
                                            <p class="text-muted fw-medium mb-1">Price :</p>
                                            <h5 class="fs-17 text-success mb-0"><i class="mdi mdi-ethereum me-1"></i> ${{ $course->price }} </h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-3 col-sm-6">
                                    <div class="p-2 border border-dashed rounded text-center">
                                        <div>
                                            <p class="text-muted fw-medium mb-1">Duration</p>
                                            <h5 class="fs-17 mb-0">{{ $course->duration }}</h5>
                                        </div>
                                    </div>
                                </div>

                            </div><!--end row-->
                            <div class="mt-4 text-muted">
                                <h5 class="fs-14">Description :</h5>
                                <p>{{ $course->description }}</p>
                            </div>
                            <div class="product-content mt-5">
                                <h5 class="fs-14 mb-3">Course Overview :</h5>
                                <nav>
                                    <ul class="nav nav-tabs nav-tabs-custom nav-success" id="nav-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="nav-speci-tab" data-bs-toggle="tab" href="#nav-speci" role="tab" aria-controls="nav-speci" aria-selected="true">Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="nav-additional-tab" data-bs-toggle="tab" href="#nav-additional" role="tab" aria-controls="nav-additional" aria-selected="false">Course Structure</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="tab-content border border-top-0 p-4" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-speci" role="tabpanel" aria-labelledby="nav-speci-tab">
                                        <p>{{ $course->description }}
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="nav-additional" role="tabpanel" aria-labelledby="nav-additional-tab">
                                        <!-- Accordions Bordered -->
                                        <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box accordion-secondary" id="accordionBordered">
                                            @forelse($course->curriculum as $curriculum)
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="{{ $curriculum->id }}">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $curriculum->id }}" aria-expanded="true" aria-controls="{{ $curriculum->id }}">
                                                            {{ $curriculum->name }}
                                                        </button>
                                                    </h2>
                                                    <div id="{{ $curriculum->id }}" class="accordion-collapse collapse show" aria-labelledby="{{ $curriculum->id }}" data-bs-parent="#accordionBordered">
                                                        <div class="accordion-body">
                                                            {{ $curriculum->content }}
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                    No Content Found
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div>
                                    <h5 class="fs-14 mb-3">Frequently Asked Questions</h5>
                                </div>
                                <div class="row gy-4 gx-0">
                                    <div class="col-lg-12">
                                        <div>
                                            <!-- Accordions with Plus Icon -->
                                            <div class="accordion custom-accordionwithicon-plus" id="accordionWithplusicon">
                                                @forelse($course->faqs as $faq)
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="accordionwithplusExample1">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accor_plusExamplecollapse1" aria-expanded="true" aria-controls="accor_plusExamplecollapse1">
                                                                {{ $faq->name }}
                                                            </button>
                                                        </h2>
                                                        <div id="accor_plusExamplecollapse1" class="accordion-collapse collapse show" aria-labelledby="accordionwithplusExample1" data-bs-parent="#accordionWithplusicon">
                                                            <div class="accordion-body">
                                                                {{ $faq->content }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                        No content found
                                                @endforelse

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->


                                    <!-- end col -->
                                </div>
                                <!-- end Ratings & Reviews -->
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div><!--end card-->


    </div>
@endsection
@section('script')

@endsection
