<?php

namespace GTImports;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'summary', 'description',
    ];
}
