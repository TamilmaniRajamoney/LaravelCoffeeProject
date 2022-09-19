<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    
    use HasFactory;

    protected $fillable =['user_id','coffeename','title','type','category','description', 'email','website', 'location'];
    
    public function scopeFilter($query, array $filter){

    }
}
