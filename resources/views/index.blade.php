@extends('frontend.layout')

@section('title')
Portfolio
@endsection

@section('main')

	<!-- PRELOADER -->
	<div id="preloader">
		<div class="loader_line"></div>
	</div>
	<!-- /PRELOADER -->

<section  class="hero">
  <div id="particles-js"></div>
    <div class="container middle-section">
      <div class="row">
        <div class="col-12 text-center">
          <img 
          src="{{asset($profile->formal_image)}}" 
          alt="{{$profile->fullname.' Profile Image'}}" 
          class="img rounded-circle profile-img"
          title="{{$profile->fullname}}"
          />
        </div>
        <div class="col-12 text-center mt-4">
          <h1>{{$profile->fullname}}</h1>
          @if (!is_null($profile->current_job))
          <span 
          class="d-block text-white mt-3 mb-1" 
          style="font-size: 11pt !important;">
          {{$profile->current_job}}
          </span>
          @endif
          <div class="mt-4">
            @foreach ($media as $single)
              <a href="{{$single->url}}" class="home-media-icon"><img src="{{asset($single->icon)}}" alt="{{$single->platform}}" title="{{$single->platform}}" /></a>
            @endforeach
          </div>
          <p class="mt-4">
            <span class="typed" data-typed-items="{{$profile->typed_quotes}}"></span>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

@section('extra_scripts')
<script src="{{asset('frontend/assets/js/preloader.js')}}"></script>
<script  src="{{asset('frontend/assets/js/particles.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/particles-js-config.js')}}"></script>
@endsection