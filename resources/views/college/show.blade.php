@extends('layouts.app')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        College Information
                    </div>
                    <div class="float-end">
                        <a href="{{ route('college.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label for="code" class="col-md-4 col-formlabel text-md-end text-start"><strong>College
                                ID:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $college->collid }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="name" class="col-md-4 col-formlabel text-md-end text-start"><strong>Full
                                Name:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $college->collfullname }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="quantity" class="col-md-4 colform-label text-md-end text-start"><strong>Short
                                Name:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $college->collshortname }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="quantity"
                            class="col-md-4 colform-label text-md-end text-start"><strong>Departments:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            <ul>
                                @forelse ($college->departments as $department)
                                    <li>{{ $department->deptfullname }}</li>
                                @empty
                                    <li>No departments found.</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <label for="quantity"
                            class="col-md-4 colform-label text-md-end text-start"><strong>Programs:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            <ul>
                                @forelse ($college->programs as $program)
                                    <li>{{ $program->progfullname }}</li>
                                @empty
                                    <li>No programs found.</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
