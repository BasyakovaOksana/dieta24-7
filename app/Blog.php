<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'slug', 'title', 'seo_title', 'meta_description', 'content', 'image',
        'category', 'date'
    ];
}
