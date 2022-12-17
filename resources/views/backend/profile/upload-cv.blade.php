@extends('backend.layout')

@section('title')
Upload CV
@endsection

@section('main')

<h2 class="my-4">Curriculum Vitae</h2>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title py-2">Upload</h6>
            </div>
            <div class="card-body">
                <div class="row mb-5">
                    <form action="{{route('cv.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="d-block form-label mt-1 mb-2">
                                    Upload CV in PDF File <small>(MAX: 2MB)</small>
                                </label>
                                <input type="file" class="form-control" name="cv" accept=".pdf,.PDF" id="pdf_file">
                                <small class="text-danger" id="pdf_size"></small>
                            </div>
                            <div class="col-12 form-group my-4">
                                @if (!is_null(Auth::user()->profile->cv))
                                <a href="{{route('cv.delete')}}"  class="text-light btn btn-danger" ><i class="fa-solid fa-trash"></i> Remove Previous</a>
                                @endif
                                <button  class="text-light btn btn-primary" type="submit" id="submitBtn" ><i class="fa-solid fa-plus"></i> Upload</button>
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

    $('#pdf_file').change((e)=>{
        const file = e.target.files[0];
        const size = (((file.size)/1024)/1024).toFixed(2)
        $('#pdf_size').html('<br>'+size+' Megabytes')
    })

    $('#submitBtn').click((e)=>{
        e.preventDefault()
         $('#submitBtn').addClass('disabled')
         $('#submitBtn').text('Submitting...')
         $('#submitBtn').closest('form').submit()
    })

</script>
@endsection