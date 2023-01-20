<?php

namespace App\Http\Controllers\Backend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAboutRequest;

class AboutController extends Controller
{
    public function aboutUs()
    {
        $about = About::first();
        return view('backend.pages.update-about', compact('about'));
    }

    public function updateAboutUs(UpdateAboutRequest $request, About $about)
    {
        $input = $request->only([
        'site_name', 'address', 'address_one', 'site_description',
        'email_one','email_two','contact_number_one','contact_number_two',
        'contact_number_three','facebook','instagram','twitter',
        'site_policy','site_why_us','site_mission','site_vision', 'opening_hours',
        'meta_title', 'meta_tags', 'meta_description'
        ]);

        $site_logo = $request->file('site_logo');
        $site_image = $request->file('site_image');

        $path = 'abouts';
        $input['site_logo'] = updateNewImageOrKeepOld($site_logo, $about->site_logo, $path, 300, 99);
        $input['site_image'] = updateNewImageOrKeepOld($site_image, $about->site_image, $path, 1000, 1000);

        $about = $about->update($input);

        if($about) {
           session()->flash('success', 'About us updated Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> back();
    }
}
