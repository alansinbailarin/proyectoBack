<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = "profiles";
    protected $fillable = [
        "id",
        "name",
        "surname",
        "email",
        "phone_number",
        "gender",
        "birthdate"
    ];

    protected $rules = [
        "name" => ["required", "string", "max:100"],
        "surname" => ["required", "string", "max:150"],
        "email" => ["required", "string", "email", "max:255", "unique:profiles"],
        "phone_number" => ["required", "string", "max:10"],
        "gender" => ["required", "string", "max:1"],
        "birthdate" => ["required", "date"]
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
