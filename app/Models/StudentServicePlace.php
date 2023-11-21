<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudentService;


class StudentServicePlace extends Model{

    use HasFactory;

    protected $table = 'student_service_places';

    protected $fillable = [
        'name',
        'price',
    ];


    public function studentOrder(){
        return $this->hasMany(StudentOrder::class, 'student_service_place_id', 'id');
    }
    public function studentService(){
        return $this->hasMany(StudentService::class, 'student_service_place_id','id');
    }

}
