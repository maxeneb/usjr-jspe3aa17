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
                <div class="card-header">Students List</div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Student ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Middle Name</th>
                                <th scope="col">Prog ID</th>
                                <th scope="col">Coll ID</th>
                                <th scope="col">Year</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $student)
                                <tr>
                                    <td>{{ $student->studid }}</td>
                                    <td>{{ $student->studfirstname }}</td>
                                    <td>{{ $student->studlastname }}</td>
                                    <td>{{ $student->studmidname }}</td>
                                    <td>{{ $student->studprogid }}</td>
                                    <td>{{ $student->studcollid }}</td>
                                    <td>{{ $student->studyear }}</td>
                                    <td>
                                        <a href="{{ route('student.show', $student->studid) }}"
                                            class="btn btn-warning btn-sm"><i class="bi bieye"></i> Show</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">No students found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
