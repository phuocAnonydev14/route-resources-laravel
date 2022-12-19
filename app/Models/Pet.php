<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $table = "pets";

    protected $fillable=['name','price','sale_price','description','status','image','category_id'];


    public function relationship(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
