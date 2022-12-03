<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CustomerServicePlace;
use App\Models\CustomerOrder;




class  CustomerService extends Model{

    use HasFactory;

    protected $table = 'tb_customer_sercive';
    protected $fillable = [
        'id',
        'customer_service_place',
        'service',
        'price',
    ];

    public function customerOrder(){
        return $this->hasMany(CustomerOrder::class, 'id','services');
    }

    public function customerServicePlace(){
        return $this->belongsTo(CustomerServicePlace::class);
    }
    
   
    

}