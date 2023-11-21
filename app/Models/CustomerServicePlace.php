<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CustomerService;

class CustomerServicePlace extends Model{
    use HasFactory;

    protected $table = 'customer_service_places';
    protected $fillable = [
        'id',
        'name',
    ];
    public function customerService(){
        return $this->hasMany(CustomerService::class, 'customer_service_place_id', 'id');
    }
}
