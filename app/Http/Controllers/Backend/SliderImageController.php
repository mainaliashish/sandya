<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSliderRequest;
use App\Http\Requests\UpdateSliderRequest;

class SliderImageController extends Controller
{
 public function sliderImage()
    {
      return view('backend.sliders.index')
              ->with('sliders', Slider::latest()->paginate(6));
    }

    public function createImage()
    {
      return view('backend.sliders.create');
    }

    public function storeImage(CreateSliderRequest $request)
    {
        $slider = new Slider;

        $input = $request->only(['slider_title', 'slider_motto', 'slider_description', 'is_featured']);

        if($request->is_featured) {
          $input['is_featured'] = 1;
        } else {
          $input['is_featured'] = 0;
        }
        $image = $request->file('slider_image');
        $path = 'sliders';

        if($image) {
            $input['slider_image'] = uploadImage($image,$path, 1920, 900);
        }
        $slider = $slider->create($input);

        if($slider) {
           session()->flash('success', 'Slider added Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.sliders');

    }

    public function showImage($id)
    {
      $slider = Slider::findOrFail($id);
      return view('backend.sliders.show')
              ->with('slider', $slider);
    }

    public function editImage($id)
    {
      $slider = slider::findOrFail($id);

      return view('backend.sliders.edit')
            ->with('slider', $slider);

    }

    public function updateImage(UpdateSliderRequest $request, $id)
    {
        // dd($input['is_featured']);
        $slider = Slider::findOrFail($id);

        $input = $request->only(['slider_title', 'slider_motto', 'slider_description', 'is_featured']);

        if($request->is_featured) {
          $input['is_featured'] = 1;
        } else {
          $input['is_featured'] = 0;
        }
        $image = $request->file('slider_image');
        $path = 'sliders';

        $input['slider_image'] = updateNewImageOrKeepOld($image, $slider->slider_image, $path, 1920, 900);

        $result = $slider->update($input);

        if($result) {
             session()->flash('success', 'Slider Updated Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.sliders');
    }

    public function destroyImage($id)
    {
      $slider = Slider::findOrFail($id);
      $result = $slider->delete();

      if($result) {
             session()->flash('success', 'Slider deleted Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.sliders');
    }
}
