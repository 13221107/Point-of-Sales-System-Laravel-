{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report Dashboard</title>
</head>
<body>
    @if (empty($report_list))
        There are no data in Report Table
    @else
        <table>
            <thead>
                <th>Period Start</th>
                <th>Period End</th>
                <th>Generated At</th>
                <th>Report Type</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($report_list as $reports)
                    <tr>
                        <td>{{ $reports->period_start }}</td>
                        <td>{{ $reports->period_end }}</td>
                        <td>{{ $reports->generated_by_user_id }}</td>
                        <td>{{ $reports->report_type }}</td>
                        <td>
                            <a href="{{ url('/report/'.$reports->id.'/edit') }}">Edit</a>
                            <a href="{{ url('/report/'.$reports->id.'/delete') }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{  url('/report/add') }}">Add New Report</a>
</body>
</html> --}}

@extends('layouts.master')

@section('title', 'Report Management')  
@section('page-title')
    <i class="bi bi-file-earmark-bar-graph"></i> Report Management  
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-0">Manage your Reports</p>  
        </div>
        <a href="{{ url('/report/add') }}" class="btn btn-success">  
            <i class="bi bi-plus-circle"></i> Add New Report
        </a>
    </div>

    <div class="card shadow">
        <div class="card-header bg-white">
            <h5 class="mb-0"><i class="bi bi-table"></i> Report List</h5>  
        </div>
        <div class="card-body">
            @if (empty($report_list) || count($report_list) == 0) 
                <div class="alert alert-info text-center">
                    <i class="bi bi-info-circle"></i> No data available.
                    <br>
                    <a href="{{ url('/report/add') }}" class="btn btn-primary mt-2">  
                        Add Your First report
                    </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                    <th>Period Start</th>
                                    <th>Period End</th>
                                    <th>Generated At</th>
                                    <th>Report Type</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($report_list as $item)  
                                <tr>
                                    <td>{{ $reports->period_start }}</td>
                                    <td>{{ $reports->period_end }}</td>
                                    <td>{{ $reports->generated_by_user_id }}</td>
                                    <td>{{ $reports->report_type }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ url('/report/'.$reports->id.'/edit') }}"   {{-- CHANGE THIS --}}
                                               class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                            <a href="{{ url('/report/'.$reports->id.'/delete') }}"  {{-- CHANGE THIS --}}
                                               class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection