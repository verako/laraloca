<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    protected $fillable=['id','name','department_id'];
    public function department(){
    	return $this->belongsTo('Department'); //замыкаем свзь с моделью department один к одному
    }
    public function buyers(){
    	return $this->belongsToMany('Buyer','sellers_buyers','seller_id','buyer_id');//связь многим ко многим с моделью buyer
    }
}
