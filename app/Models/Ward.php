<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Ward extends Model
{
    use Translatable;
    use HasFactory;
    public $timestamps = true;
    public $translatedAttributes = [
    	'ward_id',
    	'province_id',
    	'content',
    	'district_id',
    	'name',
    	'locale',
    ];
    protected $fillable = [
    	'user_id',
    	'status',
    ];
}
