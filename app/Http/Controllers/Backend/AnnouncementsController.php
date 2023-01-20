<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::latest()->paginate(8);
        return view('backend.announcements.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAnnouncementRequest $request)
    {
        $announcement = new Announcement;

        $input = $request->only(['title', 'description', 'is_featured', 'meta_title', 'meta_tags', 'meta_description']);
        $input['slug'] = Str::slug($input['title']);

        $input['is_featured'] = $announcement -> getFeatured($input['is_featured'] ?? '');

        $image = $request->file('image');
        $path = 'announcements';

        if($image) {
            $input['image'] = uploadImage($image, $path, 1181, 563);
        }

        $announcement = $announcement->create($input);

        if($announcement) {
           session()->flash('success', 'Announcement created Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.announcements');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        return view('backend.announcements.show')
                ->with('announcement', $announcement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        return view('backend.announcements.edit', compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnnouncementRequest $request, Announcement $announcement)
    {
        $model = new Announcement;

        $input = $request->only(['title', 'description', 'is_featured', 'meta_title', 'meta_tags', 'meta_description']);

        $input['slug'] = Str::slug($input['title']);


        $input['is_featured'] = $model->getFeatured($input['is_featured'] ?? '');

        $image = $request->file('image');
        $path = 'announcements';

        $input['image'] = updateNewImageOrKeepOld($image, $announcement->image, $path, 1181, 563);

        $result = $announcement->update($input);

        if($result) {
             session()->flash('success', 'Announcement Updated Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.announcements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Announcement $announcement)
    {
      $result = $announcement->delete();

      if($result) {
             session()->flash('success', 'Announcement deleted Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.announcements');
    }
}
