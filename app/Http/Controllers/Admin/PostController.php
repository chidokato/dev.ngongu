<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use Image;
use File;

use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\Post;
use App\Models\PostTranslation;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = Session::get('locale');
        $post = PostTranslation::join('posts', 'posts.id', '=', 'post_translations.post_id')
            ->select('post_translations.*', 'posts.slug', 'posts.status')
            ->where('sort_by', 'News')
            ->where('locale', $locale)->orderBy('post_id', 'DESC')->get();
        return view('admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locale = Session::get('locale');
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->select('category_translations.*')
            ->where('sort_by', 'News')
            ->where('locale', $locale)->orderBy('category_id', 'DESC')->get();
        return view('admin.post.create')->with(compact('category'));
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
        $post = new Post();
        $post->user_id = Auth::User()->id;
        $post->status = 'true';
        $post->sort_by = 'News';
        $post->slug = Str::slug($data['name:vi'], '-');

        // thêm ảnh
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            while(file_exists("data/news/".$filename)){$filename = rand(0,99)."_".$filename;}
            $file->move('data/news', $filename);
            $post->img = $filename;
        }
        // thêm ảnh

        $post->fill([
          'en' => [
            'category_id' => $data['category_id:en'],
            'name' => $data['name:en'],
            'detail' => $data['detail:en'],
            'content' => $data['content:en'],
            'title' => $data['title:en'],
            'description' => $data['description:en'],
          ],
          'vi' => [
            'category_id' => $data['category_id:vi'],
            'name' => $data['name:vi'],
            'detail' => $data['detail:vi'],
            'content' => $data['content:vi'],
            'title' => $data['title:vi'],
            'description' => $data['description:vi'],   
          ],
          'cn' => [
            'category_id' => $data['category_id:cn'],
            'name' => $data['name:cn'],
            'detail' => $data['detail:cn'],
            'content' => $data['content:cn'],
            'title' => $data['title:cn'],
            'description' => $data['description:cn'],   
          ]
        ]);

        $post->save();
        return redirect('admin/post')->with('Success','Success');
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
        $locale = Session::get('locale');
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->select('category_translations.*')
            ->where('sort_by', 'News')
            ->where('locale', $locale)->orderBy('category_id', 'DESC')->get();
        $data = Post::find($id);
        // $PostTranslation = PostTranslation::where('locale', $locale)->orderBy('category_id', 'DESC')->get();
        return view('admin.post.edit')->with(compact('category', 'data', 'locale'));
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

        $Post = Post::find($id);
        $Post->slug = Str::slug($data['name:vi'], '-');
        if (isset($data['category_id:en'])) {
            $Post->fill([
              'en' => [
                'category_id' => $data['category_id:en'],
              ],
              'vi' => [
                'category_id' => $data['category_id:vi'],
              ],
              'cn' => [
                'category_id' => $data['category_id:cn'],
              ]
            ]);
        }
        $Post->fill([
          'en' => [
            'name' => $data['name:en'],
            'detail' => $data['detail:en'],
            'content' => $data['content:en'],
            'title' => $data['title:en'],
            'description' => $data['description:en'],
          ],
          'vi' => [
            'name' => $data['name:vi'],
            'detail' => $data['detail:vi'],
            'content' => $data['content:vi'],
            'title' => $data['title:vi'],
            'description' => $data['description:vi'],   
          ],
          'cn' => [
            'name' => $data['name:cn'],
            'detail' => $data['detail:cn'],
            'content' => $data['content:cn'],
            'title' => $data['title:cn'],
            'description' => $data['description:cn'],   
          ]
        ]);
        // thêm ảnh
        if ($request->hasFile('img')) {
            if(File::exists('data/news/'.$Post->img)) { File::delete('data/news/'.$Post->img);} // xóa ảnh cũ
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            while(file_exists("data/news/".$filename)){$filename = rand(0,99)."_".$filename;}
            $file->move('data/news', $filename);
            $Post->img = $filename;
        }
        // thêm ảnh
        $Post->save();
        
        return redirect()->back()->with('Success','Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $PostTranslation = PostTranslation::where('post_id', $id)->get();
        foreach ($PostTranslation as $key => $value) {
            PostTranslation::find($value->id)->delete();
        }
        $Post = Post::find($id);
        if(File::exists('data/news/'.$Post->img)) { File::delete('data/news/'.$Post->img);} // xóa ảnh cũ
        $Post->delete();
        return redirect()->back()->with('Success','Success');
    }
}
