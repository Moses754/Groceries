<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vege extends Model
{
    use HasFactory;

    protected $table="veges";
    protected $primaryKey="vege_id";
    protected $fillable =['name', 'price'];


    //return $this->hasMany('user',foreignkey:'role_id',localkey:"role-id')
  
}
