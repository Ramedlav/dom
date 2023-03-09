<?php

namespace App\Services\Filters;

use Illuminate\Database\Eloquent\Builder;

interface Filterable
{
    public static function apply(Builder $builder, $value);
}
