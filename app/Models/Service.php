<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model implements Searchable
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'slug',
        'service_description',
        'service_image',
        'is_featured',
        'meta_title',
        'meta_description',
        'meta_tags',
    ];
    // Use Slug instead of ID
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getCreatedAtAttribute($value)
    {
        $value = Carbon::create($value);

        return $value->toDayDateTimeString();
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('about.services.show', $this->slug);

        return new SearchResult(
            $this,
            Str::limit($this->service_description, 250),
            $url
         );
    }

    public function getOnlyTitlesMetas()
    {
        $titles = $this->select('service_name', 'meta_title', 'meta_description', 'meta_tags')->get();
        return $titles;
    }

}
