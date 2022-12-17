@extends('frontend.layout')

@section('title')
Profile
@endsection

@section('main')

<main id="main" >
    <section id="about" class="about">
        <div class="container">
  
          <div class="section-title">
            <h2>Profile</h2>
            <p>
              {{$profile->about}}
            </p>
          </div>
  
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img 
              src="{{asset($profile->formal_image)}}" 
              alt="{{$profile->fullname.' Profile Image'}}" 
              title="{{$profile->fullname}}" 
              class="img-fluid thumbnail" />
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3> {{$profile->professional_title}}</h3>
              <p class="font-italic">
                {{$profile->vision}}
              </p>
              <div class="row">
                <div class="col-md-6">
                  <ul>
                    <li>
                      <i class="icofont-rounded-right"></i> 
                      <strong>Full Name:</strong> {{$profile->fullname}}
                    </li>
                    <li>
                      <i class="icofont-rounded-right"></i> 
                      <strong>Date of Birth:</strong> {{date('d M, Y', strtotime($profile->dob))}}
                    </li>
                    <li>
                      <i class="icofont-rounded-right"></i> 
                      <strong>Email:</strong> {{$profile->email}}
                    </li>
                    <li>
                      <i class="icofont-rounded-right"></i> 
                      <strong>Nationality:</strong> {{$profile->nationality}}
                    </li>
                    <li>
                      <i class="icofont-rounded-right"></i> 
                      <strong>Marital Status:</strong> {{$profile->marital_status}}
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul>
                    <li>
                      <i class="icofont-rounded-right"></i> 
                      <strong>Nickname:</strong> {{$profile->nickname}}
                    </li>
                    <li>
                      <i class="icofont-rounded-right"></i> 
                      <strong>Age:</strong> {{$profile->age}} Years
                    </li>
                    <li>
                      <i class="icofont-rounded-right"></i> 
                      <strong>Phone:</strong> {{$profile->phone}}
                    </li>
                    <li>
                      <i class="icofont-rounded-right"></i> 
                      <strong>Education:</strong> {{$profile->education}}
                    </li>
                    <li>
                      <i class="icofont-rounded-right"></i> 
                      <strong>Religion:</strong> {{$profile->religion}}
                    </li>
                  </ul>
                </div>
                <hr class="col-12 mx-auto bg-light">
              </div>
              <p>
                <div class="row">
                  <div class="col-md-6">
                    <strong class="d-block mb-2">Present address:</strong>
                    {{$profile->present_addr}}
                  </div>
                  @if (!is_null($profile->cv))
                  <div class="col-md-6 mt-4">
                    <a href="{{route('frontend.cv.download')}}" class="d-inline-block btn custom-red-light-btn" ><i class="icofont-download"></i>&ensp;Download CV</a>
                  </div>
                  @endif
                </div>
              </p>
            </div>
          </div>
  
        </div>
      </section>
</main>

@endsection