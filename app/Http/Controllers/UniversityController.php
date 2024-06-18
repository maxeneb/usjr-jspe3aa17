<?php

namespace App\Http\Controllers;
use App\Models\College;
use App\Models\Department;
use App\Models\Program;
use App\Models\Student;
use Illuminate\View\View;


use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function showAllStudents() : View {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function showStudent($studid) {
        $student = Student::findOrFail($studid);
        return view('student.show', compact('student'));
    }

    public function showAllColleges() {
        $colleges = College::with('programs')->get();
        return view('college.index', compact('colleges'));
    }

    public function showCollege($collid) {
        $college = College::findOrFail($collid);
        return view('college.show', compact('college'));
    }

    public function showDepartments()
    {
        $departments = Department::with('college')->get();
        return view('department.index', compact('departments'));
    }
}
