@extends('frontend.layout.master')
@section('title') Women In Tech  @endsection
@section('css')

@endsection

@section('content')
    <section class="section bg-light mt-5" id="candidates" style="margin-right: 5%; padding: 90px 50px">
        <div class="container-fluid" >

        <div class="row">
            &nbsp;
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex align-items-center">
                            <h2 class="card-title mb-0 flex-grow-1">Explore Courses</h2>
                            <div>
                                <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample"><i class="ri-filter-2-line align-bottom"></i> Filters</a>
                            </div>
                        </div>
                        <div class="collaps show" id="collapseExample">
                            <div class="row row-cols-xxl-3 row-cols-lg-3 row-cols-md-2 row-cols-1 mt-3 g-3">
                                <div class="col">
                                    <h6 class="text-uppercase fs-12 mb-2">Search</h6>
                                    <input type="text" class="form-control" placeholder="Search product name" autocomplete="off" id="searchProductList">
                                </div>
                                <div class="col">
                                    <h6 class="text-uppercase fs-12 mb-2">Select Category</h6>
                                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control choices__input" data-choices="" name="select-category" data-choices-search-false="" id="select-category" hidden="" tabindex="-1" data-choice="active"><option value="" data-custom-properties="[object Object]">Select Category</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]" aria-selected="true">Select Category</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--select-category-item-choice-8" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="8" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Select Category</div><div id="choices--select-category-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1" data-value="3d Style" data-select-text="Press to select" data-choice-selectable="">3d Style</div><div id="choices--select-category-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Artwork" data-select-text="Press to select" data-choice-selectable="">Artwork</div><div id="choices--select-category-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Collectibles" data-select-text="Press to select" data-choice-selectable="">Collectibles</div><div id="choices--select-category-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Crypto Card" data-select-text="Press to select" data-choice-selectable="">Crypto Card</div><div id="choices--select-category-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Games" data-select-text="Press to select" data-choice-selectable="">Games</div><div id="choices--select-category-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="Music" data-select-text="Press to select" data-choice-selectable="">Music</div><div id="choices--select-category-item-choice-7" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="7" data-value="Photography" data-select-text="Press to select" data-choice-selectable="">Photography</div></div></div></div>
                                </div>
                                <div class="col">
                                    <h6 class="text-uppercase fs-12 mb-2">Select Category</h6>
                                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control choices__input" data-choices="" name="select-category" data-choices-search-false="" id="select-category" hidden="" tabindex="-1" data-choice="active"><option value="" data-custom-properties="[object Object]">Select Category</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]" aria-selected="true">Select Category</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--select-category-item-choice-8" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="8" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Select Category</div><div id="choices--select-category-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1" data-value="3d Style" data-select-text="Press to select" data-choice-selectable="">3d Style</div><div id="choices--select-category-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Artwork" data-select-text="Press to select" data-choice-selectable="">Artwork</div><div id="choices--select-category-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Collectibles" data-select-text="Press to select" data-choice-selectable="">Collectibles</div><div id="choices--select-category-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Crypto Card" data-select-text="Press to select" data-choice-selectable="">Crypto Card</div><div id="choices--select-category-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Games" data-select-text="Press to select" data-choice-selectable="">Games</div><div id="choices--select-category-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="Music" data-select-text="Press to select" data-choice-selectable="">Music</div><div id="choices--select-category-item-choice-7" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="7" data-value="Photography" data-select-text="Press to select" data-choice-selectable="">Photography</div></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="d-flex align-items-center mb-4">
                    <div class="flex-grow-1">
                        <p class="text-muted fs-14 mb-0">Result: {{ $courses->count() }}</p>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <a class="text-muted fs-14 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                All View
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1" id="explorecard-list">
            @foreach($courses as $course)
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
        <div style="float:right">{{ $courses->links() }}</div>

        <!-- end row -->
        <div class="py-4 text-center" id="noresult" style="display: none;">
            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px"></lord-icon>
            <h5 class="mt-4">Sorry! No Result Found</h5>
        </div>

    </div>
    </section>
@endsection
@section('script')

@endsection
