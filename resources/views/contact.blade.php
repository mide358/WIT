@extends('frontend.layout.master')
@section('title') Women In Tech  @endsection
@section('css')

@endsection

@section('content')
    <section class=" mt-5" id="" style="margin-right: 5%">

        <div class="row justify-content-center">
            <div class="col-lg-9 justify-content-center">
                <h1 class="text-center">Contact Us</h1>
            </div>
            <div class="col-lg-9 justify-content-center">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Contact Us</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <form action="{{ route('frontend.contact.post') }}" method="POST">
                               @csrf
                               <div class="row gy-4">
                                   <div class="col-xxl-6 col-md-6">
                                       <div>
                                           <label for="basiInput" class="form-label">First Name</label>
                                           <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required>
                                       </div>
                                   </div>
                                   <!--end col-->
                                   <div class="col-xxl-6 col-md-6">
                                       <div>
                                           <label for="labelInput" class="form-label">Last Name</label>
                                           <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required>
                                       </div>
                                   </div>
                                   <!--end col-->
                                   <div class="col-xxl-6 col-md-6">
                                       <div>
                                           <label for="placeholderInput" class="form-label">Email Address:</label>
                                           <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email address" value="{{ old('email') }}" required>
                                       </div>
                                   </div>
                                   <!--end col-->
                                   <div class="col-xxl-6 col-md-6">
                                       <div>
                                           <label for="valueInput" class="form-label">Phone Number</label>
                                           <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" required>
                                       </div>
                                   </div>
                                   <div class="col-xxl-12 col-md-6">
                                       <div>
                                           <label for="valueInput" class="form-label">Comment</label>
                                           <textarea class="form-control @error('comments') is-invalid @enderror" name="comments" value="{{ old('comments') }}" rows="5"></textarea>
                                       </div>
                                   </div>
                                   <div class="col-xxl-6 col-md-6 ">
                                       <div>
                                           <button type="submit" href="" class="form-control btn btn-primary"> Contact Us </button>
                                       </div>
                                   </div>
                                   <!--end col-->
                               </div>
                           </form>
                            <!--end row-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')

@endsection
