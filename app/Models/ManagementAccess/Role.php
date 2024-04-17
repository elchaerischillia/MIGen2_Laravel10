<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Illuminate\Database\Eloquent\SoftDeletes; 
Class Role extends Model 
{ 
 // Use Hasfactory; 
 use Softdeletes; 
 //deklarasi tabel 
 public $table = 'role'; 
 //tipe data harus yyyy-mm-dd hh:mm:ss 
 protected $dates = [ 
 'created_at', 
 'updated_at', 
 'deleted_at' 
 ]; 
 protected $fillable = [ 
 'title', 
 'created_at', 
 'updated_at', 
 'deleted_at' 
 ]; 
 //one to many 
public function permission_role() { 
    return $this->hasMany('App\Models\ManagementAccess\PermissionRole, role_id'); 
   } 
   //one to many 
   public function role_user() { 
    return $this->hasMany('App\Models\ManagementAccess\RoleUser ,role_id'); 
   } 
}
