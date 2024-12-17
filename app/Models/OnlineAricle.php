<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\AtricleFilters;

class OnlineAricle extends Model
{
    use HasFactory,AtricleFilters;

    protected $fillable=[
        'title',
        'description',
        'url',
        'source',
        'urlToImage',
        'author',
        'publishedAt',
        'content'
    ];

    protected $likeFilterFields = ['title', 'source','creator','publishedAt'];

    protected $boolFilterFields = ['status'];
}
