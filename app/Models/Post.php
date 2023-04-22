<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Post extends Model
{
    use Translatable;
    use HasFactory;
    public $timestamps = false;
    public $translatedAttributes = [
    	'post_id',
    	'category_tras_id',
        'ward_id',
    	'name',
    	'detail',
        'content',
        'price',
        'unit',
    	'address',
    	'locale',
    	'title',
    	'description',
    ];
    protected $fillable = [
    	'user_id', 
        'status', 
    	'slug',
    ];

    public function PostTranslation()
    {
        return $this->hasMany(PostTranslation::class, 'post_id', 'id');
    }
    public function Images()
    {
        return $this->hasMany(Images::class, 'post_id', 'id');
    }
}
