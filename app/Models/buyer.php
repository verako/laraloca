<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buyer extends Model
{
    protected $fillable=['id','name','department_id','seller_id'];
    public function seller(){
    	return $this->belongsToMany('Seller','sellers_buyers','buyer_id','seller_id');//связь многим ко многим с моделью seller
    }
}
