<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team_1 = Team::create([
            'name' => 'Ram Lama',
            'image' => '',
            'address' => 'Dudhe',
            'contact' => '0987678907',
            'email' => 'ramlama@gmail.com',
            'facebook' => 'fb.com/lamaram',
            'twitter' => 'twitter.com/lamaram',
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',
        ]);
        $team_2 = Team::create([
            'name' => 'Ram Lama',
            'image' => '',
            'contact' => '0987678907',
            'address' => 'Dudhe',
            'email' => 'ramlama@gmail.com',
            'facebook' => 'fb.com/lamaram',
            'twitter' => 'twitter.com/lamaram',
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',
        ]);
        $team_3 = Team::create([
            'name' => 'Ram Lama',
            'image' => '',
            'contact' => '0987678907',
            'address' => 'Dudhe',
            'email' => 'ramlama@gmail.com',
            'facebook' => 'fb.com/lamaram',
            'twitter' => 'twitter.com/lamaram',
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',
        ]);
        $team_4 = Team::create([
            'name' => 'Ram Lama',
            'image' => '',
            'contact' => '0987678907',
            'address' => 'Dudhe',
            'email' => 'ramlama@gmail.com',
            'facebook' => 'fb.com/lamaram',
            'twitter' => 'twitter.com/lamaram',
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',
        ]);
    }
}
