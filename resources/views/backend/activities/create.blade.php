@extends('backend.layout')

@section('title')
Add New Activity
@endsection

@section('main')

<h2 class="my-4">Activity</h2>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title py-2">Add New</h6>
            </div>
            <div class="card-body">
                <div class="row mb-5">
                    <form action="{{route('activities.store')}}" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group mb-2">
                                <label class="d-block form-label mt-1 mb-2">
                                    Title
                                </label>
                                <input type="text" class="form-control" name="title" value="{{old('title')}}">
                            </div>
                            <div class="col-md-6 form-group mb-2">
                                <label class="d-block form-label mt-1 mb-2">
                                    Institute
                                </label>
                                <input type="text" class="form-control" name="institute" value="{{old('institute')}}">
                            </div>

                            <div class="col-md-6 form-group mb-2">
                                <label class="d-block form-label mt-1 mb-2">
                                    Purpose
                                </label>
                                <input type="text" class="form-control" name="purpose" value="{{old('purpose')}}">
                            </div>

                            <div class="col-md-6 form-group mb-2">
                                <label class="d-block form-label mt-1 mb-2">
                                    Ref URL
                                </label>
                                <input type="url" class="form-control" name="ref" value="{{old('ref')}}">
                            </div>

                            <div class="col-md-12 form-group">
                                <label class="d-block form-label mt-1 mb-2">
                                    Description
                                </label>
                                <textarea name="description" rows="3" class="form-control">{{old('description')}}</textarea>
                            </div>
                            <div class="col-12 form-group my-4">
                                <button id="submitBtn" class="text-light btn btn-primary" type="submit"><i class="fa-solid fa-plus"></i>&ensp;Create</button>
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