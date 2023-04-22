<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WardTranslation extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
    	'ward_id',
    	'province_id',
    	'content',
    	'district_id',
    	'name',
    	'locale',
    ];
}
