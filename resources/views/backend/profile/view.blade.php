@extends('backend.layout')

@section('title')
Profile
@endsection

@section('main')

<h2 class="my-4">Profile</h2>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title py-2">Profile Information
                    <a href="{{route('profile.edit')}}" class="text-white btn btn-sm btn-info float-end">
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
                                    Formal Image
                                </b>
                                <img src="{{asset($information->formal_image)}}" alt="" class="img img-thumbnail img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <b class="d-block mb-3">General Information
                        </b>
                        <ul class="list-group">
                            <div class="row">
                                <div class="col-lg-6 p-0">
                                    <li class="list-group-item">
                                        <b class="d-block mb-2">Fullname:</b>
                                        {{$information->fullname}}
                                    </li>
                                    <li class="list-group-item">
                                        <b class="d-block mb-2">Nickname:</b>
                                        {{$information->nickname}}
                                    </li>
                                    <li class="list-group-item">
                                        <b class="d-block mb-2">Date of birth:</b>
                                        {{$information->dob}}
                                    </li>
                                    <li class="list-group-item">
                                        <b class="d-block mb-2">Phone:</b>
                                        {{$information->phone}}
                                    </li>
                                    <li class="list-group-item">
                                        <b class="d-block mb-2">Email:</b>
                                        {{$information->email}}
                                    </li>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <li class="list-group-item">
                                        <b class="d-block mb-2">Nationality:</b>
                                        {{$information->nationality}}
                                    </li>
                                    <li class="list-group-item">
                                        <b class="d-block mb-2">Religion:</b>
                                        {{$information->religion}}
                                    </li>
                                    <li class="list-group-item">
                                        <b class="d-block mb-2">Age:</b>
                                        {{$information->age}}
                                    </li>
                                    <li class="list-group-item">
                                        <b class="d-block mb-2">Education:</b>
                                        {{$information->education}}
                                    </li>
                                    <li class="list-group-item">
                                        <b class="d-block mb-2">Marital Status:</b>
                                        {{$information->marital_status}}
                                    </li>
                                </div>
                                <div class="col-12 p-0">
                                    <li class="list-group-item">
                                        <b class="d-block mb-2">Professional Title:</b>
                                        {{$information->professional_title}}
                                    </li>
                                    <li class="list-group-item">
                                        <b class="d-block mb-2">Typed Quotes:</b>
                                        {{$information->typed_quotes}}
                                    </li>
                                    <li class="list-group-item">
                                        <b class="d-block mb-2">Current Job:</b>
                                        @if ($information->current_job)
                                            {{$information->current_job}}
                                        @else
                                            <span class="badge bg-danger">N/A</span>
                                        @endif
                                    </li>
                                    <li class="list-group-item">
                                        <b class="d-block mb-2">Present Address:</b>
                                        {{$information->present_addr}}
                                    </li>
                                    <li class="list-group-item">
                                        <b class="d-block mb-2">About:</b>
                                        {{$information->about}}
                                    </li>
                                    <li class="list-group-item">
                                        <b class="d-block mb-2">Vision:</b>
                                        {{$information->vision}}
                                    </li>
                                </div>
                            </div>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection