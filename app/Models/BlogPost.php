<?php

namespace App\Models;

use App\Enums\BlogPostSource;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected  $casts = [
      'source' => BlogPostSource::class,
    ];

}
