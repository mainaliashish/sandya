<?php

namespace App\Http\Controllers\Backend;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientsController extends Controller
{

    public function clients()
    {
      return view('backend.clients.index')
              ->with('clients', Client::latest()->paginate(6));
    }

    public function createClient()
    {
      return view('backend.clients.create');
    }

    public function storeClient(CreateClientRequest $request)
    {
        $client = new Client;

        $input = $request->only(['client_title', 'client_logo', 'client_description', 'is_featured']);

        if($request->is_featured) {
          $input['is_featured'] = 1;
        } else {
          $input['is_featured'] = 0;
        }
        $image = $request->file('client_logo');
        $path = 'clients';

        if($image) {
            $input['client_logo'] = uploadImage($image,$path, 1920, 900);
        }
        $client = $client->create($input);

        if($client) {
           session()->flash('success', 'Client added Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.clients');

    }

    public function showClient($id)
    {
      $client = Client::findOrFail($id);
      return view('backend.clients.show')
              ->with('client', $client);
    }

    public function editClient($id)
    {
      $client = Client::findOrFail($id);

      return view('backend.clients.edit')
            ->with('client', $client);

    }

    public function updateClient(UpdateClientRequest $request, $id)
    {
        $client = Client::findOrFail($id);

        $input = $request->only(['client_title', 'client_logo', 'client_description', 'is_featured']);

        if($request->is_featured) {
          $input['is_featured'] = 1;
        } else {
          $input['is_featured'] = 0;
        }
        $image = $request->file('client_image');
        $path = 'clients';

        $input['client_image'] = updateNewImageOrKeepOld($image, $client->client_image, $path, 1920, 900);

        $result = $client->update($input);

        if($result) {
             session()->flash('success', 'Client Updated Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.clients');
    }

    public function destroyClient($id)
    {
      $client = Client::findOrFail($id);
      $result = $client->delete();

      if($result) {
             session()->flash('success', 'Client deleted Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.clients');
    }
}
