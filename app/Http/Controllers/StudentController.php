<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request){
        $students = Student::with("profile","group","career")->get();
        return Collect([
            "process" => "select all students",
            "status" => "1",
            "error" => "0",
            "data" => $students
        ]);
       // return response()->json($students);
    }

    public function shows($id){
        $student = Student::find($id);
        return response()->json($student);
    }

    public function show($serialNumber){
        $student = Student::where('serial_number', $serialNumber)->first();
        return Collect([
            "process" => "select student",
            "status" => "1",
            "error" => "0",
            "data" => $student
        ]);
        //return response()->json($student);
    }

    public function store(Request $request){          
       $student = Student::create($request->all());
        return response()->json($student);
    }
    /*
    public function store(Request $request){
        $student = Student::create([
            "serial_number" => $request['serial_number'],
            "profile_id" => $request['profile_id'],
            "career_id" => $request['career_id'],
            "group_id" => $request['group_id']
        ]);
        return response()->json($student);
    }*/

    public function update(Request $request){

        
        /*$student = Student::find($id);
        $student->update($request->all());
        return response()->json($student);*/

        $studentUpdated = Student::join("profiles","profiles.id","=","students.profile_id")
        ->where("students.serial_number","=",$request['serial_number'])
        ->update(["email" => $request['email']]);

        return collect([
            "status" => 1,
            "title" => "update student",
            "message" => "student update"
        ]);
    }

    public function destroy(Request $request){
       /* $student = Student::find($id);
        $student->delete();
        return response()->json('Student deleted');*/

        $result = Student::where("serial_number","=",$request['serial_number'])
        ->delete();

        return collect([
            "status" => 1,
            "title" => "delete student",
            "message" => "student removed"
        ]);
    }

    public function getProfileInfo($id){
        $student = Student::find($id);
        $profile = $student->profile;
        return response()->json($profile);
    }
}
