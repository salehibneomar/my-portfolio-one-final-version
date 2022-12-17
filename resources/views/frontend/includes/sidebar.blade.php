<header id="header">
    <div class="d-flex flex-column">
      <nav class="nav-menu mt-3">
        <ul>
          <li @if(request()->is('/')) class="active" @endif >
            <a href="{{route('frontend.index')}}">
              <i class="bx bx-home"></i> 
              <span>Home</span>
            </a>
          </li>
          <li @if(request()->is('profile')) class="active" @endif >
            <a href="{{route('frontend.profile')}}">
              <i class="bx bx-user"></i> 
              <span>Profile</span>
            </a>
          </li>
          <li @if(request()->is('education')) class="active" @endif >
            <a href="{{route('frontend.education')}}">
              <i class='bx bxs-graduation'></i>
              <span>Education</span>
            </a>
          </li>
          <li @if(request()->is('skills')) class="active" @endif >
            <a href="{{route('frontend.skills')}}">
              <i class="icofont-tools-alt-2"></i>
              <span>Skills</span>
            </a>
          </li>
          <li @if(request()->is('experiences')) class="active" @endif >
            <a href="{{route('frontend.experiences')}}">
              <i class="icofont-id-card"></i>
              <span>Experiences</span>
            </a>
          </li>
          <li @if(request()->is('projects')) class="active" @endif >
            <a href="{{route('frontend.projects')}}">
              <i class='bx bx-code-alt'></i>
              <span>Projects</span>
            </a>
          </li>
          <li @if(request()->is('activities')) class="active" @endif >
            <a href="{{route('frontend.activities')}}">
              <i class="icofont-atom"></i>
              <span>Activities</span>
            </a>
          </li>
          <li @if(request()->is('problem-solvings')) class="active" @endif >
            <a href="{{route('frontend.problem_solvings')}}">
              <i class='bx bx-pie-chart-alt-2' ></i>
              <span>Problem Solvings</span>
            </a>
          </li>
          <li>
            <a href="http://thickskull.lovestoblog.com/">
              <i class='bx bxl-blogger'></i>
              <span>My Blog</span>
            </a>
          </li>
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header>