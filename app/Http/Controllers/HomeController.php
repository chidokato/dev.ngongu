<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\PostTranslation;

// $locale = App::currentLocale();

class HomeController extends Controller
{
    // function __construct()
    // {

    //     view()->share( [
            
    //     ]);
    // }

    public function index()
    {
        $locale = App::currentLocale();
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->where('locale', $locale)
            ->select('category_translations.*')->orderBy('categories.view', 'asc')->get();
        return view('pages.home', [
            'category'=>$category,
        ]);
    }

    public function about()
    {
        $locale = App::currentLocale();
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->where('locale', $locale)
            ->select('category_translations.*')->orderBy('categories.view', 'asc')->get();
        return view('pages.about', [
            'category'=>$category,
        ]);
    }

    public function contact()
    {
        $locale = App::currentLocale();
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->where('locale', $locale)
            ->select('category_translations.*')->orderBy('categories.view', 'asc')->get();
        return view('pages.contact', [
            'category'=>$category,
        ]);
    }

    public function category($slug)
    {
        $locale = App::currentLocale();
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->where('locale', $locale)
            ->select('category_translations.*')->orderBy('categories.view', 'asc')->get(); //menu
        $data = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->select('category_translations.*')
            ->where('slug', $slug)
            ->where('locale', $locale)->first();
        $post = PostTranslation::where('category_id', $data->id)
            ->where('locale', $locale)
            ->get();
        if ($data->category->sort_by == 'Product') {
            return view('pages.category', compact(
                'category',
                'data',
            ));
        }elseif($data->category->sort_by == 'News'){
            return view('pages.news', compact(
                'category',
                'data',
                'post',
            ));
        }
    }

    public function post($catslug, $slug)
    {
        $locale = App::currentLocale();
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->where('locale', $locale)
            ->select('category_translations.*')->orderBy('categories.view', 'asc')->get(); //menu
        $post = PostTranslation::join('posts', 'posts.id', '=', 'post_translations.post_id')
            ->where('locale', $locale)
            ->select('post_translations.*')
            ->where('posts.slug', $slug)
            ->first();
        return view('pages.post', compact(
            'category',
            'post',
        ));
    }
}
