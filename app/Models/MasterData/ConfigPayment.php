<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Illuminate\Database\Eloquent\SoftDeletes; 

Class ConfigPayment extends Model 
{ 
 // Use Hasfactory; 
 use SoftDeletes; 
 //deklarasi tabel 
 public $table = 'config_payment'; 
 //tipe data harus yyyy-mm-dd hh:mm:ss 
 protected $dates = [ 
 'created_at', 
 'updated_at', 
 'deleted_at' 
 ]; 
 protected $fillable = [ 
 'fee', 
 'vat', 
 'created_at', 
 'updated_at', 
 'deleted_at' 
 ]; 

}