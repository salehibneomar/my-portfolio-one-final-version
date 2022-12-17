@extends('backend.layout')

@section('title')
Activity Details
@endsection

@section('main')

<h2 class="my-4">Activity</h2>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title py-2">Details
                    <a href="{{route('activities.edit', ['id'=>$activity->id])}}" class="text-white btn btn-sm btn-info float-end">
                        <i class="fa-solid fa-pen-to-square"></i>&ensp;Edit
                    </a>
                </h6>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <b class="d-block mb-2">Title:</b>
                        {{$activity->title}}
                    </li>
                    <li class="list-group-item">
                        <b class="d-block mb-2">Institute:</b>
                        @if (is_null($activity->institute))
                            <span class="badge bg-danger">N/A</span>
                        @else
                            {{$activity->institute}}
                        @endif
                    </li>
                    <li class="list-group-item">
                        <ul class="list-group list-group list-group-horizontal-md">
                            <li class="list-group-item w-100">
                                <b class="d-inline-block me-2">Purpose:</b>
                                {{$activity->purpose}}
                            </li>
                            <li class="list-group-item w-100">
                                <b class="d-inline-block me-2">Ref URL:</b>
                                @if (is_null($activity->ref))
                                <span class="badge bg-danger">N/A</span>
                                @else
                                <a href="{{$activity->ref}}"><i>Click Here</i></a>
                                @endif
                            </li>
                        </ul>
                        <li class="list-group-item">
                            <b class="d-block mb-2">Description:</b>
                            {{$activity->description}}
                        </li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
