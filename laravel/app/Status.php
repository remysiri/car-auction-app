<?php

namespace GTImports;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function auctions()
    {
        return $this->belongsToMany(Auctions::class);
    }
}
