<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistrictTranslation extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
    	'district_id',
    	'province_id',
    	'name',
    	'locale',
    ];

    public function ProvinceTranslation()
    {
        return $this->belongsTo(ProvinceTranslation::class, 'province_id', 'id');
    }
}
