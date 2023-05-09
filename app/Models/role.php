<?php

namespace App\Models;

use App\Models\permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class role extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array 
     */
    
     protected $fillable = [
        'name','slug','note'
     ];

     public function permissions(){
      return $this->belongsToMany(permission::class);
     }
}
