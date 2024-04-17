<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Illuminate\Database\Eloquent\SoftDeletes; 
Class DetailUser extends Model 
{ 
 // Use Hasfactory; 
 use Softdeletes; 
 //deklarasi tabel 
 public $table ='detail_user'; 
 //tipe data harus yyyy-mm-dd hh:mm:ss 
 protected $dates = [ 
'created_at', 
'updated_at', 
'deleted_at' 
 ]; 
 protected $fillable = [ 
'user_id', 
'type_user_id', 
'contact', 
'address', 
'photo', 
'gender', 
'created_at', 
'updated_at', 
'deleted_at' 
 ]; 
//one to many 
public function type_user() { 
    return $this->belongsTo('App\Models\MasterData\TypeUser' , 'type_user_id','id'); 
   } 
//one to one 
public function user() { 
    return $this->belongsTo('App\Models\User' , 'user_id','id'); 
   }

} 
