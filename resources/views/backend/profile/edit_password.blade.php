@extends('backend.layout')

@section('title')
Change Password
@endsection

@section('main')

<h2 class="my-4">Change Password</h2>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title py-2">Change Password</h6>
            </div>
            <div class="card-body">
                <div class="row mb-5">
                    <form action="{{route('profile.update.password')}}" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-md-4 form-group mb-2">
                                <label class="d-block form-label mt-1 mb-2">
                                    Current Password
                                </label>
                                <input type="password" class="form-control" name="current_password">
                            </div>
                            <div class="col-md-4 form-group mb-2">
                                <label class="d-block form-label mt-1 mb-2">
                                    New Password
                                </label>
                                <input type="password" class="form-control" name="new_password">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="d-block form-label mt-1 mb-2">
                                    Retype Password
                                </label>
                                <input type="password" class="form-control" name="new_password_confirmation">
                            </div>
                            <div class="col-12 form-group my-4">
                                <button id="submitBtn" class="text-light btn btn-info" type="submit"><i class="fa-solid fa-pen-to-square"></i>&ensp;Change</button>
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