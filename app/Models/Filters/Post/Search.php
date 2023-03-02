<?php
namespace App\Models\Filters\Post;

use App\Services\Filters\BaseSearch;
use App\Services\Filters\Searchable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Services\Filters\Filterable;

class Search implements Filterable
{
    public static function apply(Builder $builder, $value)
    {
        return $builder->where('address', $value);
    }

}
