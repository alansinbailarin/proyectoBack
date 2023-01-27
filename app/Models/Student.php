<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $fillable = [
        "id",
        "serial_number",
        "profile_id",
        "career_id",
        "group_id"
    ];

    protected $rules = [
        "serial_number" => ["required", "string", "max:10"],
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function group(){
        return $this->belongsTo(Group::class);
    }

    public function career(){
        return $this->belongsTo(Career::class);
    }
}
