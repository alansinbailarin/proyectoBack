<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function index(Request $request){
        $group = Group::with("students","career")->get();
        return Collect([
            "process" => "select all groups",
            "status" => "1",
            "error" => "0",
            "data" => $group
        ]);
    }

    public function show($id){
        $group = Group::find($id);

        return response()->json($group);
    }

    public function store(Request $request){
        $group = Group::create([
            "name" => $request['name'],
            "grade" => $request['grade'],
            "career_id" => $request['career_id'],
        ]);
        return response()->json($group);
    }

    // update group by id
    public function update(Request $request){
        $group = Group::find($request['id']);
        $group->update($request->all());
        return response()->json($group);
    }

    // delete group by id and send message of deleted successfully
    public function destroy(Request $request){
        $group = Group::find($request['id']);
        
        $group->delete();
        return response()->json("Group deleted successfully");
    }
}
