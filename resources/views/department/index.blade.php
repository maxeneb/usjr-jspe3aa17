@extends('layouts.app')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">Departments</div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Department ID</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Short Name</th>
                                <th scope="col">College</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($departments as $department)
                                <tr>
                                    <td>{{ $department->deptid }}</td>
                                    <td>{{ $department->deptfullname }}</td>
                                    <td>{{ $department->deptshortname }}</td>
                                    <td>{{ $department->college->collfullname }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No departments found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
