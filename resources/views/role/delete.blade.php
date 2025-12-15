{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Role</title>
</head>
<body>
     Are you sure you want to delete this role " <b>{{ $role_entry[0]->role_name }}</b>"?
     <br>
    <a href="{{ url('/role/'.$role_entry[0]->id.'/destroy')}}">Yes</a>
    <a href="{{ url('/role') }}">No</a>
</body>
</html> --}}

@extends('layouts.master')

@section('title', 'Delete Role')

@section('page-title')
    <i class="bi bi-trash"></i> Delete Role
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/role') }}">Roles</a></li>
                    <li class="breadcrumb-item active">Delete Role</li>
                </ol>
            </nav>

            <!-- Delete Confirmation Card -->
            <div class="card shadow border-danger">
                <div class="card-header bg-danger text-white">
                    <h4 class="mb-0"><i class="bi bi-exclamation-triangle"></i> Confirm Deletion</h4>
                </div>
                <div class="card-body text-center">
                    <i class="bi bi-shield-x text-danger" style="font-size: 4rem;"></i>
                    <h5 class="mt-3">Are you sure you want to delete this role?</h5>
                    
                    <!-- Role Details -->
                    <div class="alert alert-light mt-4 text-start">
                        <table class="table table-borderless mb-0">
                            <tr>
                                <th width="35%">ID:</th>
                                <td><strong>{{ $role_entry[0]->id }}</strong></td>
                            </tr>
                            <tr>
                                <th>Role Name:</th>
                                <td><strong>{{ $role_entry[0]->role_name }}</strong></td>
                            </tr>
                        </table>
                    </div>

                    <div class="alert alert-warning" role="alert">
                        <i class="bi bi-exclamation-circle"></i> 
                        <strong>Warning:</strong> This action cannot be undone! Users with this role may be affected.
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                        <a href="{{ url('/role') }}" class="btn btn-secondary btn-lg">
                            <i class="bi bi-x-circle"></i> No, Go Back
                        </a>
                        <a href="{{ url('/role/'.$role_entry[0]->id.'/destroy') }}" class="btn btn-danger btn-lg">
                            <i class="bi bi-trash"></i> Yes, Delete Role
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection