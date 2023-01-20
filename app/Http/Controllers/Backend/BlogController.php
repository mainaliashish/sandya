<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateBlogRequest;
use App\Http\Requests\UpdateBlogRequest;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(8);
        return view('backend.blogs.index')->with('blogs', $blogs);
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.blogs.create')->with('categories', $categories);
    }

    public function store(CreateBlogRequest $request)
    {
        $input = $request->only(['title', 'content', 'category_id', 'is_featured', 'meta_title', 'meta_description','meta_tags', 'is_trending']);

        $blog = new Blog;

        $input['slug'] = Str::slug($input['title']);

        $input['meta_title'] = getMetaTitle($input['meta_title'], $input['title']);
        $input['meta_description'] = getMetadescription($input['meta_description'], $input['content']);

        $input['is_featured'] = $blog -> getFeaturedOrTrending($input['is_featured'] ?? '');
        $input['is_trending'] = $blog -> getFeaturedOrTrending($input['is_trending'] ?? '');

        $image = $request->file('image');
        $path = 'blogs';

        if($image) {
            $input['image'] = uploadImage($image, $path, 1181, 563);
        }

        $blog = $blog->create($input);

        if($blog) {
           session()->flash('success', 'Blog created Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.blogs');
    }

    public function show(Blog $blog)
    {
        return view('backend.blogs.show')
                ->with('blog', $blog);
    }

    public function edit(Blog $blog)
    {
        $categories  = Category::all();

        return view('backend.blogs.edit')->with('blog', $blog)->with('categories', $categories);
    }

    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $model = new Blog;

        $input = $request->only(['title', 'content', 'category_id', 'is_featured', 'meta_title','meta_tags', 'meta_description', 'is_trending']);

        $input['slug'] = Str::slug($input['title']);


        $input['meta_title'] = getMetaTitle($input['meta_title'], $input['title']);
        $input['meta_description'] = getMetadescription($input['meta_description'], $input['content']);

        $input['is_featured'] = $model->getFeaturedOrTrending($input['is_featured'] ?? '');
        $input['is_trending'] = $model->getFeaturedOrTrending($input['is_trending'] ?? '');

        $image = $request->file('image');
        $path = 'blogs';

        $input['image'] = updateNewImageOrKeepOld($image, $blog->image, $path, 1181, 563);

        $result = $blog->update($input);

        if($result) {
             session()->flash('success', 'Blog Updated Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.blogs');
    }


    public function trash(Blog $blog)
    {
        $result = $blog->delete();

         if($result) {
            session()->flash('success', 'Blog Trashed Successfully!');
         } else {
            session()->flash('error', 'Something went wrong.');
         }
         return redirect() -> route('backend.blogs') ;
    }

    public function getTrashed()
    {
        $blogs = Blog::onlyTrashed()-> get();

        return view('backend.blogs.trashed')->with('blogs', $blogs);
    }


    public function delete($blog)
    {
        $blog = Blog::withTrashed() -> where('slug', $blog) -> first();
        if($blog->image)
        {
            deleteImage($blog->image, 'blogs');
        }
        $result = $blog->forceDelete();

         if($result) {
            session()->flash('success', 'Blog Deleted permanently!');
         } else {
            session()->flash('error', 'Something went wrong.');
         }

         return redirect() -> route('backend.blogs.trashed') ;
    }


    public function restore($blog)
    {
        $blog = Blog::withTrashed() -> where('slug', $blog) -> first();

        $result = $blog->restore();

         if($result) {
            session()->flash('success', 'Blog Successfully restored!');
         } else {
            session()->flash('error', 'Something went wrong.');
         }

         return redirect() -> route('backend.blogs') ;
    }

    public function trashAll()
    {
        $result = DB::table('blogs')->update(['deleted_at' => now()]);

        if($result) {
            session()->flash('success', 'All Blogs Trashed Successfully!');
         } else {
            session()->flash('error', 'Something went wrong.');
         }
         return redirect() -> route('backend.blogs') ;
    }

    public function deleteAll()
    {
        $blogs =  Blog::onlyTrashed()-> get();
        foreach ($blogs as $blog) {
            if($blog->image) {
                deleteImage($blog->image, 'blogs');
            }
            $result = $blog->forceDelete();
        }

        if($result) {
            session()->flash('success', 'All Blogs deleted Successfully!');
         } else {
            session()->flash('error', 'Something went wrong.');
         }
         return redirect() -> route('backend.blogs') ;
    }

    public function restoreAll()
    {
        $result = DB::table('blogs')->update(['deleted_at' => null]);

        if($result) {
            session()->flash('success', 'All Blogs Restored Successfully!');
         } else {
            session()->flash('error', 'Something went wrong.');
         }
         return redirect() -> route('backend.blogs') ;
    }
}
