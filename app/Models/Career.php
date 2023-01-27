<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $table = "careers";
    protected $fillable = [
        "id",
        "name",
        "level"
    ];

    protected $rules = [
        "name" => ["required", "string", "max:50"],
        "level" => ["required", "integer", "max:3"]
    ];

    public function groups(){
        return $this->hasMany(Group::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
}
