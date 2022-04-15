{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="">
      <p class="">Home Template</p>
    </div>
  @endwhile
@endsection
