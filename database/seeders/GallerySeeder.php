<?php

namespace Database\Seeders;
use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $g1 = Gallery::create([
            'title'  => 'Veniam nisi laborum adipisicing duis consectetur officia excepteur ipsum adipisicing.',
            'image' => '',
            'is_featured' => 0,
            'meta_title' => 'Sandhya Education Consultancy',
            'meta_description' => 'Sandhya Education Consultancy Description',
            'meta_tags' => 'Sandhya, Education, Consultancy, Description',

        ]);

        $g2 = Gallery::create([
            'title'  => 'Veniam nisi laborum adipisicing duis consectetur officia excepteur ipsum adipisicing.',
            'image' => '',
            'is_featured' => 0,
            'meta_title' => 'Sandhya Education Consultancy',
            'meta_description' => 'Sandhya Education Consultancy Description',
            'meta_tags' => 'Sandhya, Education, Consultancy, Description',

        ]);
        $g3 = Gallery::create([
            'title'  => 'Veniam nisi laborum adipisicing duis consectetur officia excepteur ipsum adipisicing.',
            'image' => '',
            'is_featured' => 0,
            'meta_title' => 'Sandhya Education Consultancy',
            'meta_description' => 'Sandhya Education Consultancy Description',
            'meta_tags' => 'Sandhya, Education, Consultancy, Description',

        ]);
    }
}
