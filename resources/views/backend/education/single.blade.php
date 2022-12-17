@extends('backend.layout')

@section('title')
Education Details
@endsection

@section('main')

<h2 class="my-4">Education</h2>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title py-2">Details
                    <a href="{{route('education.edit', ['id'=>$education->id])}}" class="text-white btn btn-sm btn-info float-end">
                        <i class="fa-solid fa-pen-to-square"></i>&ensp;Edit
                    </a>
                </h6>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <b class="d-block mb-2">Title:</b>
                        {{$education->title}}
                    </li>
                    <li class="list-group-item">
                        <b class="d-block mb-2">Institute:</b>
                        {{$education->institute}}
                    </li>
                    <li class="list-group-item">
                        <ul class="list-group list-group list-group-horizontal-md">
                            <li class="list-group-item w-100">
                                <b class="d-inline-block me-2">Grade:</b>
                                {{$education->grade}}
                            </li>
                            <li class="list-group-item w-100">
                                <b class="d-inline-block me-2">Timeline:</b>
                                @if (is_null($education->timeline))
                                <span class="badge bg-danger">N/A</span>
                                @else
                                {{$education->timeline}}
                                @endif
                            </li>
                            <li class="list-group-item w-100">
                                <b class="d-inline-block me-2">Passing Year:</b>
                                @if (is_null($education->passing_year))
                                <span class="badge bg-danger">N/A</span>
                                @else
                                {{$education->passing_year}}
                                @endif
                            </li>
                        </ul>
                        <li class="list-group-item">
                            <b class="d-block mb-2">Description:</b>
                            {{$education->description}}
                        </li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
