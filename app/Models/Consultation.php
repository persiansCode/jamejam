<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    use SoftDeletes;
    protected $guraded =['id'];
    protected $table = 'consultation';
    protected $fillable = ['phone' , 'full_name' , 'description'];
}
