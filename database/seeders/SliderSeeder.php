<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider_1 = Slider::create([
            'slider_title' => 'Slider One',
            'slider_motto' => 'Slider One',
            'is_featured' => 1,
            'slider_description' => 'Slider Description One',
            'slider_image'  => ''
        ]);
        $slider_2 = Slider::create([
            'slider_title' => 'Slider Two',
            'slider_motto' => 'Slider One',
            'is_featured' => 1,
            'slider_description' => 'Slider Description One',
            'slider_image'  => ''
        ]);
        $slider_4 = Slider::create([
            'slider_title' => 'Slider four',
            'slider_motto' => 'Slider One',
            'slider_description' => 'Slider Description One',
            'slider_image'  => ''
        ]);
        $slider_5 = Slider::create([
            'slider_title' => 'Slider five',
            'slider_motto' => 'Slider One',
            'slider_description' => 'Slider Description One',
            'slider_image'  => ''
        ]);
        $slider_7 = Slider::create([
            'slider_title' => 'Slider six',
            'slider_motto' => 'Slider One',
            'is_featured' => 1,
            'slider_description' => 'Slider Description One',
            'slider_image'  => ''
        ]);
    }
}
