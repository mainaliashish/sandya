<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'is_featured'];

    public function getOnlyTitlesMetas()
    {
        $titles = $this->select('title', 'meta_title', 'meta_description', 'meta_tags')->get();
        return $titles;
    }
}
