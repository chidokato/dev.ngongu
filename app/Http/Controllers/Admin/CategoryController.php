<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Str;

use App\Models\Category;
use App\Models\CategoryTranslation;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = Session::get('locale');
        $category = CategoryTranslation::where('locale', $locale)->orderBy('category_id', 'DESC')->get();
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $parent_en = $data['parent'];
        if ($parent_en==0) {
            $parent_vi = '0';
            $parent_cn = '0';
        }
        $category = new Category();
        $category->user_id = Auth::User()->id;
        $category->status = 'true';
        $category->view = $data['view'];
        $category->sort_by = $data['sort_by'];
        $category->icon = $data['icon'];
        // $category->parent = $data['parent'];
        $category->slug = Str::slug($data['name:en'], '-');
        $category->fill([
            'en' => [
                'name' => $data['name:en'],
                'parent' => $parent_en,
                'content' => $data['content:en'],
                'title' => $data['title:en'],
                'description' => $data['description:en'],
            ],
            'vi' => [
                'name' => $data['name:vi'],
                'parent' => $parent_vi,
                'content' => $data['content:vi'],
                'title' => $data['title:vi'],
                'description' => $data['description:vi'],
            ],
            'cn' => [
                'name' => $data['name:cn'],
                'parent' => $parent_cn,
                'content' => $data['content:cn'],
                'title' => $data['title:cn'],
                'description' => $data['description:cn'],
            ]
        ]);
        $category->save();
        return redirect('admin/category')->with('success','updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = CategoryTranslation::find($id);
        return view('admin.category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        // dd($data);
        $category = CategoryTranslation::find($id);
        $category->name = $data['name'];
        $category->content = $data['content'];
        $category->title = $data['title'];
        $category->description = $data['description'];
        $category->save();
        
        $category = category::find($data['cid']);
        $category->view = $data['view'];
        $category->icon = $data['icon'];
        $category->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CategoryTranslation::find($id)->delete();
        return redirect()->back();
    }
}
