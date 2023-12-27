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
                        This is Profile
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
@section('script')

@endsection
