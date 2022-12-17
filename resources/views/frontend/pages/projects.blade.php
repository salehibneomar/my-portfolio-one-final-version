@extends('frontend.layout')

@section('title')
Problem Solvings
@endsection

@section('main')

<main id="main" >
    <section id="portfolio" class="portfolio">
        <div class="container">
  
          <div class="section-title">
            <h2>Projects</h2>
            <p>
              Scroll down to see all the projects I've worked on over the years using different stacks and technologies.
            </p>
          </div>
          
          <div class="row mb-5" data-aos="fade-up">
            <div class="col-lg-12">
              <a 
              class="badge custom-red-light-badge mb-md-0 mb-1" 
              href="{{route('frontend.projects')}}" >
                All&ensp;<span class="badge rounded-pill custom-red-solid-inner-raw-badge">{{$total}}</span>
              </a>
              <form action="" method="get" class="d-inline-block">
                @foreach ($platformAndCounts as $value)
                <button type="submit" class="d-inline-block mb-md-0 mb-1 badge custom-red-light-badge badge-btn" value="{{$value->platform_slug}}" name="platform">
                  {{$value->platform}} &ensp;<span class="badge rounded-pill custom-red-solid-inner-raw-badge">{{$value->counts}}</span>
                </button>
              @endforeach
              </form>
            </div>
          </div>
  
          <div class="row" >
  
            @foreach ($projects as $project)
              <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="50">
                <div class="card shadow-sm project-card" >
                  <img src="{{asset($project->thumbnail)}}" class="card-img-top" alt="thubmnail-{{$project->id}}" />
                  <div class="card-body pt-2">
                    <p 
                    class="text-right" 
                    style="font-size: 14pt; 
                    margin-bottom: 8px;
                    " >

                      @if (!is_null($project->live))
                      <a title="Live" href="{{$project->live}}" 
                      class="d-inline-block ml-1 text-primary" >
                        <i class="icofont-web"></i>
                      </a>
                      @endif
                      
                      @if (!is_null($project->video))
                      <a title="Video Presentation" href="{{$project->video}}" 
                      class="d-inline-block ml-1 text-danger">
                        <i class="icofont-youtube-play">
                        </i>
                      </a>
                      @endif

                      @if (!is_null($project->github))
                      <a title="GitHub Repo" href="{{$project->github}}" 
                      class="d-inline-block ml-1 text-dark">
                        <i class='bx bxl-github'></i>
                      </a>
                      @endif

                    </p>
                    <h5 class="custom-title-h5 mb-3">{{$project->name}}</h5>
                    <p class="card-text">
                      @foreach (explode(',', $project->techs) as $val)
                        <span class="d-inline-block badge custom-purple-light-badge mb-1 font-size-8pt">{{$val}}</span>
                      @endforeach
                    </p>
                    <p class="text-right p-0 mx-0 mb-0 mt-3">
                      <button class="btn btn-sm btn-outline-info py-0 px-1 description-btn" data-description-id="{{$project->id}}">
                        Description
                      </button>
                    </p>
                  </div>
                </div>
              </div>
            @endforeach

          </div>
  
          <div class="row mt-1 mb-4" >
            <div class="col-12" >
              <div class="float-right py-3 pl-5">
                {{$projects->links('frontend.paging.simple-paging')}}
              </div>
            </div>
          </div>

        </div>

        <div class="modal fade" id="descriptionModal" role="dialog" aria-labelledby="descriptionModal" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="project-description-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-justify px-4" id="description-show">
                 
              </div>
            </div>
          </div>
        </div>

    </section>
</main>

@endsection

@section('extra_scripts')

<script>

  $(document).ready(function (){
    $('.description-btn').click((e)=>{
      const id = e.target.dataset.descriptionId
      $('#descriptionModal').modal('show')
      $('#description-show').text('Fetching data...')
      const url = `api/projects/description/${id}`

      //console.log(url);

      $.ajax({
        type: 'GET',
        url: url,
        success: function(data){
          $('#project-description-title').text(data.name)
          $('#description-show').text(data.description)
        },
        error: function(err){
          console.log(err)
          $('#description-show').text(err.responseJSON)
        }
      })

    })
  })

</script>

@endsection
