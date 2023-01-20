<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Category extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'slug', 'is_featured'];
    // Use Slug instead of ID
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function blogs()
    {
    	return $this->hasMany(Blog::class);
    }


    public function getSearchResult(): SearchResult
    {
        $url = route('blogs.showcat', $this->slug);

        return new SearchResult(
            $this,
            $this->name,
            $url
         );
    }
}
