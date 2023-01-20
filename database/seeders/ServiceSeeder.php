<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service_1 = Service::create([
            'service_name' => 'Visa Processing',
            'slug' => Str::slug('Visa Processing'),
            'service_image' => '',
            'service_description' => 'Esse esse cupidatat cupidatat do amet consequat incididunt excepteur quis pariatur sunt. Sunt aliqua cillum anim non tempor occaecat tempor ipsum consequat nulla do cupidatat incididunt. Ullamco nisi exercitation aliquip ipsum sit voluptate commodo laborum consequat sit adipisicing irure. Cillum duis mollit laborum laborum magna minim mollit ea. Amet exercitation laboris velit ut id velit do. Commodo eiusmod aliqua et ipsum proident dolor adipisicing Lorem.',
            'is_featured' => 1,
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',
        ]);

        $service_2 = Service::create([
            'service_name' => 'Career Counseling',
            'slug' => Str::slug('Career Counseling'),
            'service_image' => '',
            'service_description' => 'Esse esse cupidatat cupidatat do amet consequat incididunt excepteur quis pariatur sunt. Sunt aliqua cillum anim non tempor occaecat tempor ipsum consequat nulla do cupidatat incididunt. Ullamco nisi exercitation aliquip ipsum sit voluptate commodo laborum consequat sit adipisicing irure. Cillum duis mollit laborum laborum magna minim mollit ea. Amet exercitation laboris velit ut id velit do. Commodo eiusmod aliqua et ipsum proident dolor adipisicing Lorem.',
            'is_featured' => 1,
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',
        ]);

        $service_3 = Service::create([
            'service_name' => 'Documents Checking',
            'slug' => Str::slug('Documents Checking'),
            'service_image' => '',
            'service_description' => 'Esse esse cupidatat cupidatat do amet consequat incididunt excepteur quis pariatur sunt. Sunt aliqua cillum anim non tempor occaecat tempor ipsum consequat nulla do cupidatat incididunt. Ullamco nisi exercitation aliquip ipsum sit voluptate commodo laborum consequat sit adipisicing irure. Cillum duis mollit laborum laborum magna minim mollit ea. Amet exercitation laboris velit ut id velit do. Commodo eiusmod aliqua et ipsum proident dolor adipisicing Lorem.',
            'is_featured' => 1,
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',
        ]);


        $service_4 = Service::create([
            'service_name' => 'Test Preparations',
            'slug' => Str::slug('Test Preparations'),
            'service_image' => '',
            'service_description' => 'Esse esse cupidatat cupidatat do amet consequat incididunt excepteur quis pariatur sunt. Sunt aliqua cillum anim non tempor occaecat tempor ipsum consequat nulla do cupidatat incididunt. Ullamco nisi exercitation aliquip ipsum sit voluptate commodo laborum consequat sit adipisicing irure. Cillum duis mollit laborum laborum magna minim mollit ea. Amet exercitation laboris velit ut id velit do. Commodo eiusmod aliqua et ipsum proident dolor adipisicing Lorem.',
            'is_featured' => 1,
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',
        ]);
    }
}
