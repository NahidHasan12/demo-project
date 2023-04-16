<?php

namespace App\Models;

use App\Models\role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class permission extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array 
     */
    
     protected $fillable = [
        'module_id','name','slug'
     ];

     public function roles(){
      return $this->belongsToMany(role::class);
     }
}
