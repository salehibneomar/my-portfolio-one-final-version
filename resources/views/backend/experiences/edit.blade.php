@extends('backend.layout')

@section('title')
Edit Experience
@endsection

@section('main')

<h2 class="my-4">Experience</h2>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title py-2">Edit</h6>
            </div>
            <div class="card-body">
                <div class="row mb-5">
                    <form action="{{route('experiences.update', ['id'=>$experience->id])}}" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group mb-2">
                                <label class="d-block form-label mt-1 mb-2">
                                    Title
                                </label>
                                <input type="text" class="form-control" name="title" value="{{$experience->title}}">
                            </div>
                            <div class="col-md-6 form-group mb-2">
                                <label class="d-block form-label mt-1 mb-2">
                                    Company
                                </label>
                                <input type="text" class="form-control" name="company" value="{{$experience->company}}">
                            </div>

                            <div class="col-md-6 form-group mb-2">
                                <label class="d-block form-label mt-1 mb-2">
                                    Type
                                </label>
                                <input type="text" class="form-control" name="type" value="{{$experience->type}}">
                            </div>

                            <div class="col-md-6 form-group mb-2">
                                <label class="d-block form-label mt-1 mb-2">
                                    Timeline
                                </label>
                                <input type="text" class="form-control" name="timeline" value="{{$experience->timeline}}">
                            </div>

                            <div class="col-md-12 form-group">
                                <label class="d-block form-label mt-1 mb-2">
                                    Description
                                </label>
                                <textarea name="description" rows="3" class="form-control">{{$experience->description}}</textarea>
                            </div>
                            <div class="col-12 form-group my-4">
                                <button id="submitBtn" class="text-light btn btn-info" type="submit"><i class="fa-solid fa-pen-to-square"></i>&ensp;Update</button>
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

    $('#submitBtn').click((e)=>{
        e.preventDefault()
        $('#submitBtn').addClass('disabled')
        $('#submitBtn').text('Submitting...')
        $('#submitBtn').closest('form').submit()
    })

</script>
@endsection