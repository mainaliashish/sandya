<?php

namespace App\Models;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model implements Searchable
{
    use HasFactory;
    protected $fillable = [
        'name','image','contact', 'address','email','facebook','twitter',
        'meta_title',
        'meta_description',
        'meta_tags',
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('about.teams');

        return new SearchResult(
            $this,
            $this->name,
            $url
         );
    }
}
