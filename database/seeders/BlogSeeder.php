<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name'    => 'Society',
            'slug'  => 'society',
            'is_featured' => 1
        ]);

        $category2 = Category::create([
            'name'    => 'Health',
            'slug'  => 'health',
            'is_featured' => 1
        ]);

        $category3 = Category::create([
            'name'    => 'Technology',
            'slug'  => 'technology',
            'is_featured' => 1,
        ]);

        $article1 = Blog::create([
            'title' => 'We relocated our office to a new designed garage',
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',
            'slug'  => Str::slug('We relocated our office to a new designed garage'),
            'content' => 'We relocated our office to a new designed garage',
            'category_id' => $category1->id,
            'is_featured' => 1,
            'is_trending' => 1,
            'views' => 1,
            'image'        => '',
        ]);

        $article2 = Blog::create([
            'title' => 'Top 5 brilliant content marketing strategies',
            'slug'  => Str::slug('Top 5 brilliant content marketing strategies'),
            'content' => 'We relocated our office to a new designed garage',
            'category_id' => $category2->id,
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',
            'is_featured' => 1,
            'is_trending' => 1,
            'views' => 0,
            'image'        => '',
        ]);


        $article3 = Blog::create([
            'title' => 'Best practices for minimalist design with example',
            'slug'  => Str::slug('Best practices for minimalist design with example'),
            'content' => 'We relocated our office to a new designed garage',
            'category_id' => $category3->id,
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',
            'is_featured' => 1,
            'is_trending' => 1,
            'views' => 1,
            'image'        => '',
        ]);

        $article4 = Blog::create([
            'title' => 'Congratulate and thank to Maryam for joining our team',
            'slug'  => Str::slug('Congratulate and thank to Maryam for joining our team'),
            'content' => 'We relocated our office to a new designed garage',
            'category_id' => $category2->id,
            'meta_title' => 'We relocated our office to a new designed garage',
            'meta_tags' => 'We, relocated, our, office, to, a, new, designed, garage',
            'meta_description' => 'We relocated our office to a new designed garage',
            'is_featured' => 1,
            'is_trending' => 1,
            'views' => 1,
            'image'        => '',
        ]);
    }
}
