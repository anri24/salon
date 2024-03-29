<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudentService;

use App\Models\StudentServicePlace;

class StudentOrder extends Model{

    use HasFactory;

    protected $table = 'student_orders';

    protected $fillable = [
        'student_service_place_id',
        'date',
        'firstname',
        'lastname',
        'number',
        'sms',
    ];

    public function studentServicePlace(){
        return $this->belongsTo(StudentServicePlace::class ,'student_service_place_id','id');
    }

}
