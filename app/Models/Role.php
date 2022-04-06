<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
  protected $table="roles";
  protected $fillable =['name', 'desc'];

  /**
   *  A can role have many users
   
   **/
    
    public function users(){
       return $this->hasMany('user', foreignkey:'role_id', 
        localkey:'role_id');
    }
}
