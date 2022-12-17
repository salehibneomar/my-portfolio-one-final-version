@extends('backend.layout')

@section('title')
Add New Skill
@endsection

@section('main')

<h2 class="my-4">Skill</h2>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title py-2">Add New</h6>
            </div>
            <div class="card-body">
                <div class="row mb-5">
                    <form action="{{route('skills.store')}}" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-md-8 form-group mb-2">
                                <label class="d-block form-label mt-1 mb-2">
                                    Name
                                </label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}">
                            </div>
                            <div class="col-md-4 form-group mb-2">
                                <label class="d-block form-label mt-1 mb-2">
                                    Level
                                </label>
                                <input type="number" class="form-control" name="level" step="1" min="1" max="100" value="{{old('level')}}">
                            </div>
                            <div class="col-12 form-group">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="status" value="1">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Check if the skill is in practice</label>
                                </div>
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