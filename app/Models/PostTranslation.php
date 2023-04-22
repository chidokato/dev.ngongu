<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
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

    public function Post()
    {
        return $this->hasOne(Post::class, 'id', 'post_id');
    }
    public function CategoryTranslation()
    {
        return $this->belongsTo('App\Models\CategoryTranslation','category_tras_id','id');
    }
}
