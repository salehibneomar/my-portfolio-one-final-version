@extends('backend.layout')

@section('title')
Problem Solvings
@endsection

@section('main')

<h2 class="my-4">Problem Solvings</h2>

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
                            <th style="width:30%">Platform</th>
                            <th style="width:5%">Solved</th>
                            <th style="width:10%">Profile</th>
                            <th style="width:10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($problemSolvings as $problemSolving)
                            <tr>
                                <td>
                                    {{$problemSolving->platform}}
                                </td>
                                <td>
                                    <span class="badge bg-secondary">{{$problemSolving->solved}}</span>
                                </td>
                                <td>
                                    <i><a href="{{$problemSolving->profile}}">Click</a></i>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="{{route('problem-solvings.edit', ['id'=>$problemSolving->id])}}" type="button" class="text-white btn btn-info">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="{{route('problem-solvings.delete', ['id'=>$problemSolving->id])}}" type="button" class="btn btn-danger dlt-btn">
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
            order: [[1, 'desc']],
            columnDefs: [
                { orderable: false, targets: 2 },
                { orderable: false, targets: 3 },
            ],
        });
    });
</script>

@endsection