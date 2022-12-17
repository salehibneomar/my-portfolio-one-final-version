@extends('backend.layout')

@section('title')
Education
@endsection

@section('main')

<h2 class="my-4">Education</h2>

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
                            <th>Title</th>
                            <th style="width:15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($education as $row)
                            <tr>
                                <td><span class="badge bg-secondary">{{$row->id}}</span></td>
                                <td>{{$row->title}}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="{{route('education.show', ['id'=>$row->id])}}" type="button" class="text-white btn btn-success">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="{{route('education.edit', ['id'=>$row->id])}}" type="button" class="text-white btn btn-info">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="{{route('education.delete', ['id'=>$row->id])}}" type="button" class="btn btn-danger dlt-btn">
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
            order: [[0, 'desc']],
            columnDefs: [
                { orderable: false, targets: 1 },
                { orderable: false, targets: 2 }
            ],
        });
    });
</script>

@endsection