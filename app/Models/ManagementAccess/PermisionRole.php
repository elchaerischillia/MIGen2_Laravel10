<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Illuminate\Database\Eloquent\SoftDeletes; 
Class PermissionRole extends Model 
{ 
 // Use Hasfactory; 
 use Softdeletes; 
 //deklarasi tabel 
 public $table = 'permission_role'; 
 //tipe data harus yyyy-mm-dd hh:mm:ss 
 protected $dates = [ 
 'created_at', 
 'updated_at', 
 'deleted_at' 
 ]; 
 protected $fillable = [ 
 'permission_id', 
 'role_id', 
 'created_at', 
 'updated_at', 
 'deleted_at' 
 ]; 
 //one to many 
public function permission() { 
    return $this-> 
   belongsTo('App\Models\ManagementAccess\Permission , permission_id', 
   'id'); 
   } 
   //one to many 
   public function role() { 
    return $this->belongsTo('App\Models\ManagementAccess\Role, 
   role_id', 'id'); 
   }
} 