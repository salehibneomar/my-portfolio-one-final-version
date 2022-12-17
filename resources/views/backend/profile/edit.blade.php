@extends('backend.layout')

@section('title')
Edit Profile
@endsection

@section('main')

<h2 class="my-4">Edit Profile</h2>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title py-2">Edit Profile Information</h6>
            </div>
            <div class="card-body">
                <div class="row mb-5">
                    <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3 mb-2 form-group">
                                <img src="{{asset($information->formal_image)}}" alt="" class="img img-fluid img-thumbnail" id="img_preview" />
                                <label class="d-block form-label mt-1 mb-2">
                                    Formal Image <br>
                                    <small>(Max 3Mb, 600x600)</small>
                                </label>
                                <input type="file" class="form-control" name="formal_image" id="img" accept=".jpg,.jpeg,.png">
                                <small class="text-danger d-inline-block mt-2" id="img_size"></small>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Fullname
                                        </label>
                                        <input type="text" class="form-control" name="fullname" value="{{$information->fullname}}">
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Nickname
                                        </label>
                                        <input type="text" class="form-control" name="nickname" value="{{$information->nickname}}">
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Email
                                        </label>
                                        <input type="email" class="form-control" name="email" value="{{$information->email}}">
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Phone
                                        </label>
                                        <input type="phone" class="form-control" name="phone" value="{{$information->phone}}">
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Date of Birth
                                        </label>
                                        <input type="date" class="form-control" name="dob" value="{{$information->dob}}">
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Education
                                        </label>
                                        <input type="text" class="form-control" name="education" value="{{$information->education}}">
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Nationality
                                        </label>
                                        <input type="text" class="form-control" name="nationality" value="{{$information->nationality}}">
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Religion
                                        </label>
                                        <input type="text" class="form-control" name="religion" value="{{$information->religion}}">
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Martital Status
                                        </label>
                                        <select name="marital_status" class="form-select">
                                            @foreach ($maritalStatus as $status)
                                                <option value="{{$status}}"
                                                @if ($information->marital_status===$status)
                                                    selected
                                                @endif
                                                >
                                                    {{$status}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Professional Title
                                        </label>
                                        <input type="text" class="form-control" name="professional_title" value="{{$information->professional_title}}">
                                    </div>
                                    <div class="col-md-12 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Current Job
                                        </label>
                                        <input type="text" class="form-control" name="current_job" value="{{$information->current_job}}">
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Present Address
                                        </label>
                                        <textarea name="present_addr" rows="5" class="form-control">{{$information->present_addr}}</textarea>
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            About
                                        </label>
                                        <textarea name="about" rows="5" class="form-control">{{$information->about}}</textarea>
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Vision
                                        </label>
                                        <textarea name="vision" rows="5" class="form-control">{{$information->vision}}</textarea>
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Typed Quotes
                                        </label>
                                        <textarea name="typed_quotes" rows="5" class="form-control">{{$information->typed_quotes}}</textarea>
                                    </div>
                                    <div class="col-12 form-group my-4">
                                        <button id="submitBtn" class="w-100 text-light btn btn-info" type="submit"><i class="fa-solid fa-pen-to-square"></i>&ensp;Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('extra_scripts')
<script>

    $('#img').change((e)=>{
        const file = e.target.files[0];
        const size = (((file.size)/1024)/1024).toFixed(2)
        $('#img_size').text(size+' Megabytes')

        if(file!==undefined){
            const reader  = new FileReader()
            reader.readAsDataURL(file)
            reader.onload = (e)=>{
                $("#img_preview").attr("src", e.target.result)
            }
        }
    })

    $('#submitBtn').click((e)=>{
        e.preventDefault()
        $('#submitBtn').addClass('disabled')
        $('#submitBtn').text('Submitting...')
        $('#submitBtn').closest('form').submit()
    })

</script>
@endsection