<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Filters\Filterable;
use App\Traits\AtricleFilters;

class Article extends Model
{
    use HasFactory,AtricleFilters;

    protected $fillable=[
        'title',
        'link',
        'keywords',
        'creator',
        'video_url',
        'description',
        'publisheddate',
        'fulldescription',
        'source_id'
    ];

    protected $likeFilterFields = ['title', 'source_id','creator','keywords'];

    protected $boolFilterFields = ['status'];
    
}
