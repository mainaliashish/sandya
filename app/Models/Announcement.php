<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model implements Searchable
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'slug',
        'meta_title',
        'meta_description',
        'meta_tags',
    ];

    // Use Slug instead of ID
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getFeatured($value)
    {
        if($value) {
            $value = 1;
            return $value;
        } else {
            $value = 0;
            return $value;
        }
    }

    public function getCreatedAtAttribute($value)
    {
        $value = Carbon::create($value);

        return $value->toDayDateTimeString();
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('about.announcements.show', $this->slug);

        return new SearchResult(
            $this,
            Str::limit($this->title, 250),
            $url
         );
    }
    public function getOnlyTitlesMetas()
    {
        $titles = $this->select('title', 'meta_title', 'meta_description', 'meta_tags')->get();
        return $titles;
    }

}
