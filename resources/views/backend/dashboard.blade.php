@extends('backend.layout')

@section('title')
Dashboard
@endsection

@section('main')
<h2 class="my-4">Dashboard</h2>

<div class="row">
    <div class="col-lg-3">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Total Portfolio Visitors: {{$visitorCount}}</div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <h5>Visitor History</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-dark text-white">
                        <th>IP</th>
                        <th>First</th>
                        <th>Recent</th>
                    </thead>
                    <tbody>
                        @foreach ($visitors as $visitor)
                            <tr>
                                <td>{{$visitor->ip}}</td>
                                <td>
                                    {{($visitor->created_at)->format('d M y, h:i:s A')}}
                                </td>
                                <td>
                                    {{($visitor->updated_at)->format('d M y, h:i:s A')}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="float-end">
                    {{$visitors->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection