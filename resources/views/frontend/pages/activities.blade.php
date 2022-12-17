@extends('frontend.layout')

@section('title')
Activities
@endsection

@section('main')

<main id="main" >
    <section id="resume" class="resume">
        <div class="container">
  
          <div class="section-title">
            <h2>Activities</h2>
            <p>
              This section contains all my activities such as training, achievements, and others.
            </p>
          </div>
  
          <div class="row">
            <div class="col-12" >
              <span class="badge custom-red-light-badge" data-aos="fade-up">
                Total&ensp;<span class="badge rounded-pill custom-red-solid-inner-raw-badge">{{$total}}</span>
              </span>
              <div class="timeline mt-4">
                @foreach ($activities as $activity)
                <div class="timeline-card timeline-card-success card shadow-sm" data-aos="fade-up" data-aos-delay="50">
                    <div class="card-body">
                      <div class="h5 mb-1">
                        {{$activity->title}}
                        @if (!is_null($activity->institute))
                        <span class="text-muted h6">
                            &ensp;-&ensp;{{$activity->institute}}
                        </span>
                        @endif
                      </div>

                      <span class="badge custom-badge-bg p-2 mb-2 mt-2 d-inline-block">
                        {{$activity->purpose}}
                      </span>

                      <div>
                        {{$activity->description}}
                      </div>

                      @if (!is_null($activity->ref))
                      <div class="mt-2">
                        <small>
                         Reference:&nbsp;
                         <a href="{{$activity->ref}}">
                           <em>Click&ensp;<i class='bx bx-link-external' ></i></em>
                         </a>
                        </small>
                       </div>
                      @endif

                    </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>

          <div class="row mt-1 mb-4" >
            <div class="col-12" >
              <div class="float-right py-3 pl-5">
                {{$activities->links('frontend.paging.simple-paging')}}
              </div>
            </div>
          </div>
  
        </div>
      </section>
</main>

@endsection