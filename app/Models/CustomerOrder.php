<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CustomerService;


class CustomerOrder extends Model{

    use HasFactory;
    
    protected $table = 'tb_customer_order';
    protected $fillable = [
        'id',
        'services',
        'date',
        'time',
        'firstname',
        'lastname',
        'number',
        'sms',
    ];
    public function custmoerServiceForOrder(){
        return $this->belongsTo(CustomerService::class,'services');
    }
    
}