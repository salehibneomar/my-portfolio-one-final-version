<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">CMS</div>

                <a class="nav-link @if (!request()->is('admin/education*'))
                    collapsed
                @endif" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#education" aria-expanded="false" aria-controls="education">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-school"></i>
                    </div>
                    Education
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="@if (!request()->is('admin/education*'))
                    collapse
                @endif" id="education" >
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" 
                        href="{{route('education.view')}}">
                            Manage
                        </a>
                        <a class="nav-link" 
                        href="{{route('education.create')}}">
                            Add New
                        </a>
                    </nav>
                </div>

                <a class="nav-link  @if (!request()->is('admin/skills*'))
                    collapsed
                @endif" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#skills" aria-expanded="false" aria-controls="skills">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                    Skills
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class=" @if (!request()->is('admin/skills*'))
                    collapse
                @endif" id="skills" >
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('skills.view')}}">
                            Manage
                        </a>
                        <a class="nav-link" href="{{route('skills.create')}}">
                            Add New
                        </a>
                    </nav>
                </div>
  
                <a class="nav-link  @if (!request()->is('admin/projects*'))
                    collapsed
                @endif" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#projects" aria-expanded="false" aria-controls="projects">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    Projects
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="@if (!request()->is('admin/projects*'))
                    collapse
                @endif" id="projects" >
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" 
                        href="{{route('projects.view')}}">
                            Manage
                        </a>
                        <a class="nav-link" 
                        href="{{route('projects.create')}}">
                            Add New
                        </a>
                    </nav>
                </div>

                <a class="nav-link @if (!request()->is('admin/experiences*'))
                    collapsed
                @endif" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#experiences" aria-expanded="false" aria-controls="experiences">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-computer"></i>
                    </div>
                    Experiences
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="@if (!request()->is('admin/experiences*'))
                    collapse
                @endif" id="experiences" >
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" 
                        href="{{route('experiences.view')}}">
                            Manage
                        </a>
                        <a class="nav-link" 
                        href="{{route('experiences.create')}}">
                            Add New
                        </a>
                    </nav>
                </div>

                <a class="nav-link @if (!request()->is('admin/activities*'))
                    collapsed
                @endif" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#activities" aria-expanded="false" aria-controls="activities">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-wave-square"></i>
                    </div>
                    Activities
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="@if (!request()->is('admin/activities*'))
                    collapse
                @endif" id="activities" >
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" 
                        href="{{route('activities.view')}}">
                            Manage
                        </a>
                        <a class="nav-link" 
                        href="{{route('activities.create')}}">
                            Add New
                        </a>
                    </nav>
                </div>

                <a class="nav-link @if (!request()->is('admin/problem-solvings*'))
                    collapsed
                @endif" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#problem-solvings" aria-expanded="false" aria-controls="problem-solvings">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-terminal"></i>
                    </div>
                    Problem Solvings
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="@if (!request()->is('admin/problem-solvings*'))
                    collapse
                @endif" id="problem-solvings" >
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" 
                        href="{{route('problem-solvings.view')}}">
                            Manage
                        </a>
                        <a class="nav-link" 
                        href="{{route('problem-solvings.create')}}">
                            Add New
                        </a>
                    </nav>
                </div>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{Auth::user()->name}}
        </div>
    </nav>
</div>