@extends('frontend.layout')

@section('title')
Education
@endsection

@section('main')

<main id="main" >
    <section id="resume" class="resume">
        <div class="container">
  
          <div class="section-title">
            <h2>Education</h2>
            <p>
              All my Academic backgrounds are listed below with proper details, the list is arranged as latest first.
            </p>
          </div>
  
          <div class="row">
            <div class="col-12">
              <span class="badge custom-red-light-badge" data-aos="fade-up">
                Total&ensp;<span class="badge rounded-pill custom-red-solid-inner-raw-badge">{{$total}}</span>
              </span>
              <div class="timeline mt-4">
                @foreach ($education as $single)
                <div 
                class="timeline-card timeline-card-success card shadow-sm"
                data-aos="fade-up" data-aos-delay="50" 
                >
                    <div class="card-body">
                      <div class="h5 mb-1">
                        {{$single->title}}
                        <span class="text-muted h6">
                            <small>From</small> {{$single->institute}}
                        </span>
                      </div>
                      <span class="badge custom-badge-bg p-2 mb-2 mt-2 d-inline-block">
                        Grade: {{$single->grade}}
                      </span>

                      @if(!is_null($single->timeline))
                        <span class="badge custom-badge-bg p-2 mb-2 mt-2 d-inline-block">
                          Timeline: {{$single->timeline}}
                        </span>
                      @endif
                      @if(!is_null($single->passing_year))
                        <span class="badge custom-badge-bg p-2 mb-2 mt-2 d-inline-block">
                          Passing year: {{$single->passing_year}}
                        </span>
                      @endif

                      <div>
                        {{$single->description}}
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