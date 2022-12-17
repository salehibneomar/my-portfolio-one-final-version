@extends('frontend.layout')

@section('title')
Experiences
@endsection

@section('main')

<main id="main" >
    <section id="resume" class="resume">
        <div class="container">
  
          <div class="section-title">
            <h2>Experiences</h2>
            <p>
              All my Personal and Professional experiences are listed below with proper details, the timeline is arranged as latest first.
            </p>
          </div>
  
          <div class="row">
            <div class="col-12" >
              <span class="badge custom-red-light-badge" data-aos="fade-up">
                Total&ensp;<span class="badge rounded-pill custom-red-solid-inner-raw-badge">{{$total}}</span>
              </span>
              <div class="timeline mt-4">
                @foreach ($experiences as $experience)
                  <div class="timeline-card timeline-card-success card shadow-sm" data-aos="fade-up" data-aos-delay="50">
                      <div class="card-body">
                        <div class="h5 mb-1">
                          {{$experience->title}}
                          @if (!is_null($experience->company))
                          <span class="text-muted h6">
                              <small>At</small> {{$experience->company}}
                          </span>
                          @endif
                        </div>

                        <span class="badge custom-badge-bg p-2 mb-2 mt-2 d-inline-block">
                          {{$experience->type}} Experience
                        </span>

                        @if(!is_null($experience->timeline))
                        <span class="badge custom-badge-bg p-2 mb-2 mt-2 d-inline-block">
                          Timeline: {{$experience->timeline}}
                        </span>
                        @endif

                        <div>
                          {{$experience->description}}
                        </div>
                      </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
  
        </div>
      </section>
</main>

@endsection