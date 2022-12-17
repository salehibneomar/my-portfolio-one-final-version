@extends('backend.layout')

@section('title')
Add New Project
@endsection

@section('main')

<h2 class="my-4">Project</h2>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title py-2">Add New</h6>
            </div>
            <div class="card-body">
                <div class="row mb-5">
                    <form action="{{route('projects.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3 mb-2 form-group">
                                <img src="{{asset('images/placeholder-3.jpg')}}" alt="" class="img img-fluid img-thumbnail" id="img_preview" />
                                <label class="d-block form-label mt-1 mb-2">
                                    Upload Thumbnail <br>
                                    <small>(Max 3Mb, 800x420)</small>
                                </label>
                                <input type="file" class="form-control" name="thumbnail" id="img" accept=".jpg,.jpeg,.png">
                                <small class="text-danger d-inline-block mt-2" id="img_size"></small>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Project Name
                                        </label>
                                        <input type="text" class="form-control" name="name"  value="{{old('name')}}">
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Priority
                                        </label>
                                        <select name="priority" class="form-select">
                                            <option selected>--SELECT--</option>
                                            @for ($i=6; $i>0; $i--)
                                                <option>{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Platform
                                        </label>
                                        <input type="text" class="form-control" name="platform"  value="{{old('platform')}}">
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Technologies
                                        </label>
                                        <input type="text" class="form-control" name="techs" placeholder="Comma seperated values" value="{{old('techs')}}">
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            GitHub URL
                                        </label>
                                        <input type="url" class="form-control" name="github" value="{{old('github')}}">
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Video URL
                                        </label>
                                        <input type="url" class="form-control" name="video" value="{{old('video')}}">
                                    </div>
                                    <div class="col-md-6 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Live URL
                                        </label>
                                        <input type="url" class="form-control" name="live" value="{{old('live')}}">
                                    </div>
                                    <div class="col-md-12 form-group mb-2">
                                        <label class="d-block form-label mt-1 mb-2">
                                            Description
                                        </label>
                                        <textarea class="form-control" name="description" rows="5">{{old('description')}}</textarea>
                                    </div>

                                    <div class="col-12 form-group my-4">
                                        <button id="submitBtn" class="text-light btn btn-primary" type="submit"><i class="fa-solid fa-plus"></i> Create</button>
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