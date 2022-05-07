<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $table = "coures";

    protected $fillable = ['cours_name','description','photo','status','category_id'];

    public function modules(){
        return $this->hasMany(Section::class,'coure_id','id');
    }
}