<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $fillable=['id','name'];
    protected $table='department';
    public function seller(){
    	return $this->hasOne('Seller');//связь с моделью seller один к одному
    }
    public function buyer(){
    	return $this->hasMany('Buyer');//связь с моделью buyer один ко многим
    }
}
