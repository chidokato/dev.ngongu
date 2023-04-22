<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Models\Category;
use App\Models\CategoryTranslation;

// $locale = App::currentLocale();

class HomeEnController extends Controller
{
    public function category($lang, $slug)
    {
        $locale = App::currentLocale();
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->where('locale', $locale)
            ->select('category_translations.*')->orderBy('categories.view', 'asc')->get();
        $data = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->select('category_translations.*')
            ->where('slug', $slug)
            ->where('locale', $locale)->first();
        if ($data->category->sort_by == 'Product') {
            return view('pages.category', compact(
                'category',
                'data',
            ));
        }elseif($data->category->sort_by == 'News'){
            return view('pages.news', compact(
                'category',
                'data',
            ));
        }
    }
}
