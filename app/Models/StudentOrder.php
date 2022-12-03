<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudentService;

use App\Models\StudentServicePlace;

class StudentOrder extends Model{

    use HasFactory;

    protected $table = 'tb_student_order';
    protected $fillable = [
        'id',
        'student_service_place',
        'date',
        'firstname',
        'lastname',
        'number',
        'sms',
    ];

    public function studentServicePlaceForOrders(){
        return $this->belongsTo(StudentServicePlace::class ,'student_service_place');
    }

}