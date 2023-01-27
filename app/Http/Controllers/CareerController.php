<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(){
        $career = Career::all();
    }

    public function show(Request $request){

    }

    public function store(Request $request){

    }

    public function update(Request $request){

    }

    public function destroy(Request $request){
        
    }
}
