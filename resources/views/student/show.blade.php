@extends('layouts.app')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Student Information
                    </div>
                    <div class="float-end">
                        <a href="{{ route('student.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label for="code" class="col-md-4 col-formlabel text-md-end text-start"><strong>Student
                                ID:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $student->studid }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="name" class="col-md-4 col-formlabel text-md-end text-start"><strong>First
                                Name:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $student->studfirstname }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="quantity" class="col-md-4 colform-label text-md-end text-start"><strong>Last
                                Name:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $student->studlastname }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="price" class="col-md-4 col-formlabel text-md-end text-start"><strong>Middle
                                Name:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $student->studmidname }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="price" class="col-md-4 col-formlabel text-md-end text-start"><strong>Program
                                ID:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $student->studprogid }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="price" class="col-md-4 col-formlabel text-md-end text-start"><strong>College
                                ID:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $student->studcollid }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="price"
                            class="col-md-4 col-formlabel text-md-end text-start"><strong>Year:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $student->studyear }}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
