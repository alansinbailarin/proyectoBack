<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table = "groups";
    protected $fillable = [
        "id",
        "name",
        "grade",
        "career_id"
    ];

    protected $rules = [
        "name" => ["required", "string", "max:50"],
        "grade" => ["required", "integer", "max:3"],
    ];

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function career(){
        return $this->belongsTo(Career::class);
    }
}
