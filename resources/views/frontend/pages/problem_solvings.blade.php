@extends('frontend.layout')

@section('title')
Problem Solvings
@endsection

@section('main')

<main id="main" >
    <section id="resume" class="resume">
        <div class="container">
  
          <div class="section-title">
            <h2>Problem Solvings</h2>
            <p>
              I've solved total <b>{{$totalSolved}}</b> beginner to low-intermediate level problems in different OJs, the problem solving counts and comparisons can be seen through a polar chart given below also feel free to visit my OJ profiles for further vertification.
            </p>
          </div>
          
          <div class="row">
            <div class="col-12">
              <div class="container">
                <div class="row mx-auto">
                    <div class="col-lg-6" data-aos="fade-right">
                        <canvas 
                        id="myChart" 
                        class="chart-canvas-size">
                        </canvas>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-4" data-aos="fade-left">
                      <h5 class="custom-heading">Visit My OJ Profiles</h5>
                      <div>
                        @foreach ($solvings as $single)
                          @if (!is_null($single->profile))
                          <a class="d-inline-block badge custom-pink-light-badge mr-1 mb-2" href="{{$single->profile}}"
                            >
                            {{$single->platform}}&ensp;<i class='bx bx-link-external' ></i>
                          </a> 
                          @endif
                        @endforeach
                        {{-- <div class="text-muted mt-3">
                          <small>
                            <strong>[Note]</strong> <br>
                            As you may notice that my Dimik OJ profile link is not available above. This is because, after Dimik OJ updated their system my profile got lost, I even mailed them to get my profile back, yet I didn't get any response from them.
                          </small>
                        </div> --}}

                        <div class="text-muted mt-3">
                          <small>
                            <strong>[Other Related Profiles]</strong>
                          </small>
                          <span class="d-block mt-2"></span>
                          <a class="d-inline-block badge custom-pink-light-badge mr-1 mb-2" href="https://www.stopstalk.com/user/profile/salehibneomar"
                            >
                            StopStalk&ensp;<i class='bx bx-link-external' ></i>
                          </a>
                        </div>

                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </section>
</main>

@endsection

@section('extra_scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>

<script>

$(document).ready(function(){

  const data = {
    labels: @json($chartLabels),
    datasets: [{
      label: 'Solved',
      data: @json($chartData),
    }]
  };

  const options = {
    scale: {
      ticks: {
        beginAtZero: true,
        stepSize: 50
      }
    }
  }

  const config = {
    type: 'polarArea',
    data: data,
    options: options,
  };

  const myChart = new Chart('myChart', config)

})

</script>

@endsection