<?php

namespace App\Http\Controllers\Backend;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTeamRequest;
use App\Http\Requests\UpdateTeamRequest;

class TeamController extends Controller
{
    public function index()
    {
        return view('backend.teams.index')
                ->with('teams', Team::all());
    }

    public function create()
    {
        return view('backend.teams.create');
    }

    public function store(CreateTeamRequest $request)
    {
        $team = new Team;

        $input = $request->only(['name','contact', 'address', 'email', 'facebook', 'meta_title', 'meta_tags', 'meta_description', 'twitter']);
        $image = $request->file('image');

        if($image) {
            $input['image'] = uploadImage($image,'teams',800,800);
        }

        $team = $team->create($input);

        if($team) {
           session()->flash('success', 'Team added Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.teams');
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);
        return view('backend.teams.show')
                ->with('team', $team);
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('backend.teams.edit')
                ->with('team', $team);
    }

    public function update(UpdateTeamRequest $request, $id)
    {
        $team = Team::findOrFail($id);

        $input = $request->only(['name', 'address', 'contact', 'email', 'facebook', 'twitter', 'meta_title', 'meta_tags', 'meta_description']);

        $image = $request->file('image');

        $input['image'] = updateNewImageOrKeepOld($image, $team->image,'teams', 800,800);
        $result = $team->update($input);

        if($result) {
             session()->flash('success', 'Team Updated Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.teams');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $result = $team->delete();

        if($result) {
             session()->flash('success', 'Team member deleted Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.teams');
    }
}
