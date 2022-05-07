<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concours extends Model
{
    use HasFactory;

    protected $table = "Concours";

    protected $fillable = ['title_fr','title_ar','short_description_fr','short_description_ar','contenu_fr','contenu_ar','date_creation','email','photo','tele','attachement','lieu_fr','lieu_ar'];
}
