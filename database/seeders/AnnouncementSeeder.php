<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use App\Models\Announcement;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ann_1 = Announcement::create([
            'title' => 'Welcome to education fair...',
            'slug' => Str::slug('Welcome to education fair'),
            'description' => 'Aliqua aliquip ad deserunt labore elit exercitation consequat eu cupidatat incididunt aliqua consequat. Quis veniam do magna do dolore duis do ipsum sint eiusmod. Laboris nostrud ut et enim id. Officia eiusmod ut occaecat aliqua. In ex cupidatat non anim quis reprehenderit et officia tempor est. Dolor sit aute do aliqua fugiat est deserunt deserunt ex proident aliquip esse ad labore.',
            'image' => '',
            'is_featured' => 1,
            'meta_title' => 'Franklin Education Consultancy',
            'meta_description' => 'Franklin Education Consultancy Description',
            'meta_tags' => 'Franklin, Education, Consultancy, Description',
        ]);

        $ann_2 = Announcement::create([
            'title' => 'Welcome to our office',
            'slug' => Str::slug('Welcome to our office'),
            'description' => 'Aliqua aliquip ad deserunt labore elit exercitation consequat eu cupidatat incididunt aliqua consequat. Quis veniam do magna do dolore duis do ipsum sint eiusmod. Laboris nostrud ut et enim id. Officia eiusmod ut occaecat aliqua. In ex cupidatat non anim quis reprehenderit et officia tempor est. Dolor sit aute do aliqua fugiat est deserunt deserunt ex proident aliquip esse ad labore.',
            'image' => '',
            'is_featured' => 1,
            'meta_title' => 'Franklin Education Consultancy',
            'meta_description' => 'Franklin Education Consultancy Description',
            'meta_tags' => 'Franklin, Education, Consultancy, Description',
        ]);
    }
}
