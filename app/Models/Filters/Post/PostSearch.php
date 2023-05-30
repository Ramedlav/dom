<?php
namespace App\Models\Filters\Post;

use App\Services\Filters\BaseSearch;
use App\Services\Filters\Searchable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Post;

class PostSearch implements Searchable
{
    const MODEL = Post::class;

    use BaseSearch;
}
