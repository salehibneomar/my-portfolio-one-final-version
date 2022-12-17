@extends('backend.layout')

@section('title')
Projects
@endsection

@section('main')

<h2 class="my-4">Projects</h2>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title py-2">Manage</h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="dt">
                    <thead class="bg-light">
                        <tr>
                            <th style="width:5%">#ID</th>
                            <th>Name</th>
                            <th style="width:20%">Platform</th>
                            <th style="width:15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('extra_scripts')
<script src="{{asset('backend/js/delete-popup.js')}}"></script>
<script>
    $(document).ready(function(){
        var table = $('#dt').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{route('projects.view')}}",
            responsive: true,
            lengthMenu: [10, 20, 30],
            pageLength: 10,
            order: [[0, 'desc']],
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'platform', name: 'platform'},
                {data: 'action', name: 'action',
                orderable: false, searchable: false},
            ],
        });
    });
</script>

@endsection