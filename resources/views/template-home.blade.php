{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="bg-lightBlue">
      <p class="text-white">Home Template</p>
    </div>
  @endwhile
@endsection
