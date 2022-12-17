@extends('backend.layout')

@section('title')
Project Details
@endsection

@section('main')

<h2 class="my-4">Project</h2>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title py-2">Details
                    <a href="{{route('projects.edit', ['id'=>$project->id])}}" class="text-white btn btn-sm btn-info float-end">
                        <i class="fa-solid fa-pen-to-square"></i>&ensp;Edit
                    </a>
                </h6>
            </div>
            <div class="card-body">
                <div class="row mb-5">
                    <div class="col-md-3 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <b class="d-block mb-3">
                                    Thumbnail
                                </b>
                                <img src="{{asset($project->thumbnail)}}" alt="" class="img img-thumbnail img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <b class="d-block mb-3">General Information
                        </b>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <b class="d-block mb-2">Name:</b>
                                {{$project->name}}
                            </li>
                            <li class="list-group-item">
                                <b class="d-block mb-2">Platform:</b>
                                {{$project->platform}}
                            </li>
                            <li class="list-group-item">
                                <b class="d-block mb-2">Technologies:</b>
                                @foreach (explode(',', $project->techs) as $tech)
                                    <span class="badge bg-secondary">{{$tech}}</span>
                                @endforeach
                            </li>
                            <li class="list-group-item">
                                <ul class="list-group list-group list-group-horizontal-md">
                                    <li class="list-group-item w-100">
                                        <b class="d-inline-block me-2">Priority:</b>
                                        <span class="badge bg-success">{{$project->priority}}</span>
                                    </li>
                                    <li class="list-group-item w-100">
                                        <b class="d-inline-block me-2">GitHub:</b>
                                        <a href="{{$project->github}}"><i>Click</i></a>
                                    </li>
                                    <li class="list-group-item w-100">
                                        <b class="d-inline-block me-2">Live URL:</b>
                                        @if (is_null($project->live))
                                        <span class="badge bg-danger">N/A</span>
                                        @else
                                        <a href="{{$project->live}}"><i>Click</i></a>
                                        @endif
                                    </li>
                                    <li class="list-group-item w-100">
                                        <b class="d-inline-block me-2">Video URL:</b>
                                        @if (is_null($project->video))
                                        <span class="badge bg-danger">N/A</span>
                                        @else
                                        <a href="{{$project->video}}"><i>Click Here</i></a>
                                        @endif
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                <b class="d-block mb-2">Description:</b>
                                {{$project->description}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection