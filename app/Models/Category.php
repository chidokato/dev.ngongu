<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends Model
{
	use Translatable;
    use HasFactory;
    public $timestamps = true;
    public $translatedAttributes = [
    	'name',
    	'parent',
    	'content',
    	'category_id',
    	'locale',
    	'title',
    	'description',
    ];
    protected $fillable = [
    	'status',
    	'view',
        'icon',
    	'sort_by',
    ];

    public function CategoryTranslation()
    {
        return $this->hasMany(CategoryTranslation::class, 'category_id', 'id');
    }
}
