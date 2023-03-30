<?php

namespace App\Models;

use App\Models\Filters\Post\PostSearch;
 use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $guarded = [];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPostsBySearch(Request $request) : Builder
    {
        $builder = (new PostSearch())->apply($request);
        return $builder;
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

}
