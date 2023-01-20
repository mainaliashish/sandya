<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Client;
use App\Models\Service;
use App\Models\Message;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Team;
use App\Models\Gallery;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $slider_images = Slider::orderBy('is_featured', 'desc')->latest()->take(3)->get();
        $clients = Client::orderBy('is_featured', 'desc')->latest()->take(6)->get();
        $services = Service::orderBy('is_featured', 'desc')->latest()->take(6)->get();
        $announcements = Announcement::latest()->take(6)->get();
        return view('frontend.pages.index', compact('clients','slider_images', 'services', 'announcements'));
    }

    public function blogs()
    {
        $blogs = Blog::orderBy('is_featured', 'desc')->latest()->paginate(3);
        $categories = Category::orderBy('is_featured', 'desc')->latest()->take(6)->get();
        return view('frontend.pages.blogs', compact('blogs', 'categories'));
    }

    public function blogsShow(Blog $blog)
    {
        $categories = Category::latest()->inRandomOrder()->take(7)->get();
        return view('frontend.pages.blog-single', compact('blog', 'categories'));
    }

    public function blogsShowCategory(Category $category)
    {
        $blogs = Blog::where('category_id', $category->id)->paginate(7);
        $categories = Category::orderBy('is_featured', 'desc')->latest()->take(6)->get();
        return view('frontend.pages.blogs', compact('blogs', 'categories'));
    }

    public function services()
    {
        $services = Service::orderBy('is_featured', 'desc')->latest()->take(6)->get();
        return view('frontend.pages.services', compact('services'));
    }

    public function servicesShow(Service $service)
    {
        $categories = Category::orderBy('is_featured', 'desc')->latest()->take(6)->get();
        return view('frontend.pages.service-single', compact('service','categories'));
    }

    public function announcementsShow(Announcement $announcement)
    {
        $categories = Category::orderBy('is_featured', 'desc')->latest()->take(6)->get();
        return view('frontend.pages.announcement-single', compact('announcement','categories'));
    }

    public function about()
    {
        $teams = Team::latest()->paginate();
        return view('frontend.pages.about', compact('teams'));
    }

    public function gallery()
    {
        $g_images = Gallery::orderBy('is_featured', 'desc')->latest()->paginate(3);
        return view('frontend.pages.gallery', compact('g_images'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function ajaxContactForm(Request $request)
    {
        $request->validate([
             'fname'           => 'required',
             'email'          => 'required|email',
             'phone'          => 'required|numeric',
             'message'        => 'required',
         ]);

        Message::create([
            'name'          => $request->fname,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'message'       => $request->message,
        ]);
        return response()->json(['success'=>'Message Submitted. We will reach you soon.']);
    }
}
