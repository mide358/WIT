@extends('frontend.layout.master')
@section('title') Women In Tech  @endsection
@section('css')

@endsection

@section('content')
    <section class=" mt-5" id="" style="margin-right: 5%">
        <div class="row">
            <div class="col-lg-12">
                <div class="card rounded-0 bg-success-subtle mx-n4 mt-n4 border-top">
                    <div class="px-4">
                        <div class="row">
                            <div class="col-xxl-5 align-self-center">
                                <div class="py-4">
                                    <h4 class="display-6 coming-soon-text">Frequently asked questions</h4>
                                    <p class="text-success fs-15 mt-3">If you can not find answer to your question in our FAQ, you can always contact us or email us. We will answer you shortly!</p>
                                    <div class="hstack flex-wrap gap-2">
                                        <button type="button" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-line label-icon align-middle rounded-pill fs-16 me-2"></i> Email Us</button>
                                        <button type="button" class="btn btn-info btn-label rounded-pill"><i class="ri-twitter-line label-icon align-middle rounded-pill fs-16 me-2"></i> Send Us Tweet</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 ms-auto">
                                <div class="mb-n5 pb-1 faq-img d-none d-xxl-block">
                                    <img src="assets/images/faq-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="row justify-content-evenly mb-4">
                    <div class="col-lg-12">
                        <div class="mt-3">
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0 me-1">
                                    <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-16 mb-0 fw-semibold">General Questions</h5>
                                </div>
                            </div>

                            <div class="accordion accordion-border-box" id="genques-accordion">
                               @foreach($faqs as $faq)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="genques-heading{{ $faq->id }}">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapse{{ $faq->id }}" aria-expanded="false" aria-controls="genques-collapse{{ $faq->id }}">
                                                {{ $faq->name }}
                                            </button>
                                        </h2>
                                        <div id="genques-collapse{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="genques-heading{{ $faq->id }}" data-bs-parent="#genques-accordion" style="">
                                            <div class="accordion-body">
                                               {{ $faq->content }}
                                            </div>
                                        </div>
                                    </div>
                               @endforeach
                            </div>
                            <!--end accordion-->
                        </div>
                    </div>

                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        </div>
    </section>
@endsection
@section('script')

@endsection
