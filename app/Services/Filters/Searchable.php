<?php

namespace App\Services\Filters;

use Illuminate\Http\Request;

interface Searchable
{
    public function apply(Request $request);
}
