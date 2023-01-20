<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Team;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $q = $request->input('query');
        $searchResults = (new Search())
            ->registerModel(Category::class, 'name')
            ->registerModel(Blog::class, 'title')
            ->registerModel(Team::class, 'name')
            ->registerModel(Announcement::class, ['title', 'description'])
            ->limitAspectResults(200)
            ->perform($q);

        return view('frontend.pages.search', compact('searchResults'));
    }
}
