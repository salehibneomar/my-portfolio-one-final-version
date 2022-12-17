@extends('backend.layout')

@section('title')
Settings
@endsection

@section('main')

<h2 class="my-4">Settings</h2>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title py-2">Edit Settings</h6>
            </div>
            <div class="card-body">
                <div class="row mb-5">
                    <form action="{{route('settings.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group mb-2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{asset($settings->logo)}}" alt="" class="img img-fluid img-thumbnail w-100" id="img_preview" />
                                    </div>
                                    <div class="col-md-9">
                                        <label class="d-block form-label mt-1 mb-2">
                                            App/Site Logo
                                        </label>
                                        <input type="file" class="form-control" name="logo" accept=".png" id="img">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="d-block form-label mt-1 mb-2">
                                    App/Site Name
                                </label>
                                <input type="text" class="form-control" name="name" value="{{$settings->name}}">
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