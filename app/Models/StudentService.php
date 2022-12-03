<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudentServicePlace;
use App\Models\StudentOrder;



class StudentService extends Model{

    use HasFactory;

    protected $table = 'tb_student_sercive';
    protected $fillable = [
        'id',
        'student_service_place',
        'service',
        
    ];



    public function studentServicePlace(){
        return $this->belongsTo(StudentServicePlace::class ,'student_service_place');
    }
    

}