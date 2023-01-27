<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getAllStudents(Request $request){
        $students = Student::all();
        return response()->json($students);
    }

    public function getStudentById($id){
        $student = Student::find($id);
        return response()->json($student);
    }

    public function getStudentBySerialNumber($serialNumber){
        $student = Student::where('serial_number', $serialNumber)->first();
        return response()->json($student);
    }
}
