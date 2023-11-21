<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CustomerService;


class CustomerOrder extends Model{

    use HasFactory;

    protected $table = 'customer_orders';
    protected $fillable = [
        'service_id',
        'date',
        'time',
        'firstname',
        'lastname',
        'number',
        'sms',
    ];
    public function custmoerServiceForOrder(){
        return $this->belongsTo(CustomerService::class,'service_id','id');
    }
}
