<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class District extends Model
{
    use Translatable;
    use HasFactory;
    public $timestamps = true;
    public $translatedAttributes = [
        'district_id',
    	'province_id',
        'name',
        'locale',
    ];
    protected $fillable = [
    	'user_id',
    	'status',
    ];
}
