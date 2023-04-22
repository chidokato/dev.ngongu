<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
    	'name',
    	'parent',
    	'content',
    	'category_id',
    	'locale',
    	'title',
    	'description',
    ];

    public function Category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function PostTranslation()
    {
        return $this->hasMany('App\Models\PostTranslation','category_tras_id','id');
    }
}