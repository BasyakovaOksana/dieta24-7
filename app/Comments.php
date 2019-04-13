<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'slug', 'title', 'seo_title', 'meta_description', 'content', 'user'
    ];
}
