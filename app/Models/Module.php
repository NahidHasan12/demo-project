<?php

namespace App\Models;

use App\Models\permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array 
     */
    
    protected $fillable = [
       'name'
    ];
    public function permissions(){
        return $this->hasMany(permission::class);
    }

}
