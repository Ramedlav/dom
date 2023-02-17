<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    protected $table = 'logos';
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
