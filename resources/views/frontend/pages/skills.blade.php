@extends('frontend.layout')

@section('title')
Skills
@endsection

@section('main')

<main id="main" >
    <section id="skills" class="skills">
        <div class="container">
  
          <div class="section-title mb-2">
            <h2>Skills</h2>
            <p>
              Here are the skills I've accured so far, some skills are not in practice and they are marked with red progress in the list below!
            </p>
          </div>
  
          <div class="row skills-content" data-aos="fade-up">
            
            @foreach ($skills as $skill)
                <div class="col-lg-6">
                    <div class="progress">
                      <span class="skill">
                        {{$skill->name}}
                        @if ($skill->status==0)
                        &nbsp;(Not In Practice)
                        @endif
                        <i class="val">100%</i>
                      </span>
                      <div class="progress-bar-wrap">
                        <div 
                        class="progress-bar 
                        @if ($skill->status==0)
                        progress-bar-inactive
                        @else
                        progress-bar-active
                        @endif " 
                        role="progressbar" 
                        aria-valuenow="{{$skill->level}}" 
                        aria-valuemin="0" aria-valuemax="100"
                        title="{{$skill->level}}%"
                        >
                        </div>
                      </div>
                    </div>
                </div>
            @endforeach

          </div>
  
        </div>
    </section>
</main>

@endsection