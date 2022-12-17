@extends('backend.layout')

@section('title')
Media
@endsection

@section('main')

<h2 class="my-4">Media</h2>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title py-2">All Media
                    <a href="{{route('media.create')}}" class="text-white btn btn-sm btn-primary float-end">
                        <i class="fa-solid fa-plus"></i>&ensp;Add
                    </a>
                </h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="dt">
                    <thead class="bg-light">
                        <tr>
                            <th style="width:20%">Platform</th>
                            <th style="width:10%">Icon</th>
                            <th>URL</th>
                            <th style="width:12%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($media as $row)
                            <tr>
                                <td>{{$row->platform}}</td>
                                <td><img src="{{asset($row->icon)}}" class="img" width="32px" alt=""></td>
                                <td >
                                    <small>
                                        <i>
                                            <a href="{{$row->url}}">
                                                {{$row->url}}
                                            </a>
                                        </i>
                                    </small>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a 
                                        class="btn btn-sm btn-info text-white d-inline-block"
                                        href="{{route('media.edit', ['id'=>$row->id])}}" >
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a 
                                        class="btn btn-sm btn-danger d-inline-block dlt-btn"
                                        href="{{route('media.delete', ['id'=>$row->id])}}" >
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
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
            responsive: true,
            lengthMenu: [10, 20, 30],
            order: [[0, 'asc']],
            columnDefs: [
                { orderable: false, targets: 1 },
                { orderable: false, targets: 2 },
                { orderable: false, targets: 3 }
            ],
        });

    });
</script>

@endsection