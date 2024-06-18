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
                <div class="card-header">Colleges</div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">College ID</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Short Name</th>
                                <th scope="col">Programs</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($colleges as $college)
                                <tr>
                                    <td>{{ $college->collid }}</td>
                                    <td>{{ $college->collfullname }}</td>
                                    <td>{{ $college->collshortname }}</td>
                                    <td>
                                        <ul>
                                            @foreach ($college->programs as $program)
                                                <li>{{ $program->progfullname }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="{{ route('college.show', $college->collid) }}"
                                            class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No colleges found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
