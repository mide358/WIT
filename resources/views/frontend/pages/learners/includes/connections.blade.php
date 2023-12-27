<div class="text-center mb-5">
    @forelse($mentors as $mentor)
        <div class="card product">
            <div class="card-body">
                <div class="row gy-3">
                    <div class="col-sm-auto">
                        <div class="avatar-lg bg-light rounded p-1" style="height: 16rem; width: 16rem">
                            <img src="{{ $mentor->image }}" alt="" class="img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-sm" style="text-align: left">
                        <h2 class="text-truncate"><a href="{{ route('frontend.mentor.find', ['slug' => $mentor->slug]) }}" class="text-dark">{{ $mentor->full_name }}</a></h2>
                        <p class="text-muted">
                        <h3>{{ $mentor->profile->job_title }} at  <span class="fw-medium">{{ $mentor->profile->company}}</span></h3>
                        </p>
                        <p class="text-muted">
                        <h4>Review</h4>
                        </p>


                        <p class="text-muted mb-4 ">
                            {{ $mentor->profile->bio }}
                        </p>


                    </div>
                    <div class="col-sm-auto">
                        <div class="text-lg-end">
                            <a href="{{ route('frontend.mentor.find', ['slug' => $mentor->slug]) }}" class="btn rounded-pill btn-primary waves-effect waves-light" style="visibility: hidden">View Profile</a>
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
                            <a href="{{ route('frontend.mentor.find', ['slug' => $mentor->slug]) }}" class="btn rounded-pill btn-primary waves-effect waves-light btn-lg">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card footer -->
        </div>
    @empty
        <div class="col list-element">
            <div class="card explore-box card-animate">
               <a href="{{ route('frontend.mentors.index') }}">Explore all mentors</a>
            </div>
        </div>
    @endforelse



</div>
