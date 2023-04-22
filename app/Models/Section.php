<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Section extends Model
{
    use Translatable;
    use HasFactory;
    public $timestamps = false;
    public $translatedAttributes = [
    	'name',
    	'content',
        'img',
    	'section_id',
        'post_id',
    	'view',
    ];
    protected $fillable = [
    	'user_id', 
        'status', 
    ];
}
