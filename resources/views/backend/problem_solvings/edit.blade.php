@extends('backend.layout')

@section('title')
Edit Problem Solving Profile
@endsection

@section('main')

<h2 class="my-4">Problem Solving Profile</h2>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title py-2">Edit</h6>
            </div>
            <div class="card-body">
                <div class="row mb-5">
                    <form action="{{route('problem-solvings.update', ['id'=>$problemSolving->id])}}" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-md-7 form-group mb-2">
                                <label class="d-block form-label mt-1 mb-2">
                                    Platform
                                </label>
                                <input type="text" class="form-control" name="platform" value="{{$problemSolving->platform}}">
                            </div>
                            <div class="col-md-5 form-group mb-2">
                                <label class="d-block form-label mt-1 mb-2">
                                    Solved
                                </label>
                                <input type="number" min="1" step="1" class="form-control" name="solved" value="{{$problemSolving->solved}}">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="d-block form-label mt-2 mb-2">
                                    Profile URL
                                </label>
                                <input type="url" class="form-control" name="profile" value="{{$problemSolving->profile}}">
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

    $('#img').change((e)=>{ 
        const file = e.target.files[0];
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