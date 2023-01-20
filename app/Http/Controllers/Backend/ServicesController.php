<?php

namespace App\Http\Controllers\Backend;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServicesController extends Controller
{
    public function index()
    {
      return view('backend.services.index')
              ->with('services', Service::paginate(8));
    }

    public function show(Service $service)
    {
      return view('backend.services.show')
              ->with('service', $service);
    }

    public function create()
    {
      return view('backend.services.create');
    }

    public function store(CreateServiceRequest $request)
    {
        $service = new Service;

        $input = $request->only(['service_name', 'service_description', 'is_featured', 'meta_title', 'meta_tags', 'meta_description']);
        $input['slug'] = Str::slug($input['service_name']);

        $image = $request->file('service_image');
        $path = 'services';
        if($image) {
            $input['service_image'] = uploadImage($image, $path, 870, 382);
        }

        if ($input['is_featured'] ?? '') {
            $input['is_featured'] = 1;
        } else {
            $input['is_featured'] = 0;
        }

        $service = $service->create($input);

        if($service) {
           session()->flash('success', 'Service added Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.services');

    }

    public function edit(Service $service)
    {
      return view('backend.services.edit')
            ->with('service', $service);

    }

    public function update(UpdateServiceRequest $request, Service $service)
    {

        $input = $request->only(['service_name', 'service_description', 'is_featured', 'meta_title', 'meta_tags', 'meta_description']);
        $input['service_slug'] = Str::slug($input['service_name']);
        // dd($test);
        $image = $request->file('service_image');
        $path = 'services';
        $input['service_image'] = updateNewImageOrKeepOld($image, $service->service_image,$path, 870, 382);
        // dd($input['service_image']);
        if ($input['is_featured'] ?? '') {
           $input['is_featured'] = 1;
        } else {
           $input['is_featured'] = 0;
        }
        $result = $service->update($input);

        if($result) {
             session()->flash('success', 'Service Updated Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.services');
    }

    public function destroy(Service $service)
    {
      $result = $service->delete();

      if($result) {
             session()->flash('success', 'Service deleted Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.services');
    }
}
