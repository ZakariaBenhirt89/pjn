<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = 'modules';

    protected $fillable = ['title','coure_id'];

    public function coure(){
        return $this->hasMany(Cours::class,'id','coure_id');
    }
}
