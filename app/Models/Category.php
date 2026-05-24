<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory , SoftDeletes ;

    protected $guarded = ['id'] ; 

    protected $fillable = ['status' , 'title' , 'image' , 'description' , "arthor_id" ];

    protected $casts = ['image' => 'array' ];
 public function images(){
    return $this->hasMany(Images::class , 'category_id');
 }
    

}
