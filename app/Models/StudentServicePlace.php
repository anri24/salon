<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudentService;


class StudentServicePlace extends Model{

    use HasFactory;

    protected $table = 'tb_student_service_place';
    protected $fillable = [
        'id',
        'name',
        'price',
    ];

    
    public function studentOrder(){
        return $this->hasMany(StudentOrder::class, 'student_service_place', 'id');
    }
    public function studentService(){
        return $this->hasMany(StudentService::class, 'student_service_place','id');
    }

}