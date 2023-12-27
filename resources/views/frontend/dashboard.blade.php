@extends('frontend.layout.master')
@section('title') Women In Tech  @endsection
@section('css')

@endsection

@section('content')
{{ Auth::user()->role }}
  @if(Auth()->user()->isMentor())
      @include('frontend.partials.mentor')
  @else
      @include('frontend.partials.learner', $learnerData)
  @endif
@endsection
@section('script')

@endsection
