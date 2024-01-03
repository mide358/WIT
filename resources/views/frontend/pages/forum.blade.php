@extends('frontend.layout.master')
@section('title') Women In Tech  @endsection
@section('css')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="/js/reply.js"></script>
@endsection

@section('content')
    <section class=" mt-5" id="" style="margin-right: 5%">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Forum</h4>
                <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted">Recent<i class="mdi mdi-chevron-down ms-1"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" style="">
                            <a class="dropdown-item" href="#">Recent</a>
                            <a class="dropdown-item" href="#">Top Rated</a>
                            <a class="dropdown-item" href="#">Previous</a>
                        </div>
                    </div>
                </div>
            </div><!-- end card header -->

            <div class="card-body">
                @guest
                    <div class="row g-3 mb-3">
                        <div class="col-12">
                            <span style="color: red; font-weight: bold"> Sign up to participate in this forum</span>
                        </div>
                    </div>
                @endguest
                @auth
                <form class="mt-4" action="{{ route('forum.comment.post') }}" method="POST">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="exampleFormControlTextarea1" class="form-label text-body">Ask a Question</label>
                            <input type="hidden" name="token" value="{{ csrf_token() }}" id="tokens_p">
                            <input type="hidden" name="parent_id" value="0" id="parent_id_p">
                            <textarea class="form-control bg-light border-light" id="description_p" name="description" rows="3" placeholder="Ask a Question..." required></textarea>
                        </div>
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-ghost-secondary btn-icon waves-effect me-1"><i class="ri-attachment-line fs-16"></i></button>
                            <button type="submit" class="btn btn-primary" onclick="saveComment(event, 'no')">Post</button>
                        </div>
                    </div>
                </form>
                @endauth
                <div data-simplebar="init" style="height: 300px;" class="px-3 mx-n3 mb-2 ">
                    <div class="simplebar-wrapper" style="margin: 0px -16px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                     aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                    <div class="simplebar-content" style="padding: 0px 16px;">
                                        @foreach($forums as $forum)
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-8.jpg" alt=""
                                                         class="avatar-xs rounded-circle">
                                                </div>
                                                <div class="flex-grow-1 mt-3">
                                                    <h5 class="fs-13">{{ $forum->user->full_name }} <small class="text-muted ms-2">
                                                            {{ $forum->created_at->diffForHumans() }}
                                                        </small></h5>
                                                    <p class="text-muted">{{ $forum->description }}.</p>
                                                    @auth
                                                    <button type="button" class="btn btn-sm text-muted bg-light" data-bs-toggle="modal" data-bs-target="#myModal" onclick="replyComment({{$forum->id}})"><i
                                                            class="mdi mdi-reply"></i> Reply</button>
                                                    @endauth
                                                    @foreach($forum->children as $child)
                                                        <div class="d-flex mt-4">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-10.jpg" alt=""
                                                                     class="avatar-xs rounded-circle">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h5 class="fs-13">{{ $child->user->full_name }} <small class="text-muted ms-2">
                                                                        {{ $forum->created_at->diffForHumans() }}
                                                                    </small></h5>
                                                                <p class="text-muted">{{ $child->description }}</p>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: 1171px; height: 580px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                        <div class="simplebar-scrollbar"
                             style="height: 155px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                    </div>
                </div>

            </div>
            <!-- end card body -->
        </div>
    </section>
    <!-- Default Modals -->
    <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="parent_name"></h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('forum.comment.post') }}" method="POST">
                        <div id="notification"></div>
                        @csrf
                        <div class="row gy-4">
                            <div class="col-xxl-12 col-md-12">
                                <div>
                                    <label for="basiInput" class="form-label">Reply</label>
                                    <input type="hidden" name="parent_id" id="parent_id" value="">
                                    <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" onclick="saveComment(event, 'yes')">Post</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('script')

@endsection
